<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\SearchQuery;
use AppBundle\Entity\Movie;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class MoviesController extends Controller {
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction() {
        $this->get('session')->getFlashBag()->add('warning', 'Warning flash message');
        $this->get('session')->getFlashBag()->add('info', 'Info flash message');
        $this->get('session')->getFlashBag()->add('success', 'Success flash message');
        $this->get('session')->getFlashBag()->add('danger', 'Danger flash message');

        return $this->render('movies/index.html.twig', array(
            'quote' => 'Karol'
        ));
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction() {
        return $this->render('movies/login.html.twig');
    }

    /**
     * @Route("/movies", name="movies")
     */
    public function moviesAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Movie');
        $movies = $repository->findAll();

        return $this->render('movies/movies.html.twig', array(
            'result' => $movies,
        ));
    }

    /**
     * @Route("/movies/search", name="search")
     */
    public function searchMoviesAction(Request $request) {
        $query = new SearchQuery();

        $form = $this->createFormBuilder($query)
            ->setMethod('POST')
            ->add('title', TextType::class, array(
                'label' => 'Title:',
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('year', TextType::class, array(
                'label' => 'Year:',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            ->add('search_movies', SubmitType::class, array(
                'label' => 'Search',
                'attr' => array(
                    'class' => 'btn btn-default'
                )
            ))
            ->getForm();

        $form->handleRequest($request);
        $response = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $response = $this->get("http")->JSONRequest("http://www.omdbapi.com/?s=" . $form->get('title')->getData() . "&y=" . $form->get('year')->getData() . "&r=json");

            if (isset($response->Response) && $response->Response === 'False') {
                $this->get('session')->getFlashBag()->add('danger', $response->Error);
                $response = null;
            }
        }

        return $this->render('movies/search.html.twig', array(
            'form' => $form->createView(),
            'result' => $response
        ));
    }

    /**
     * @Route("/movies/search/add", name="add_movie")
     */
    public function addMovieAction(Request $request) {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $imdbID = $request->request->get('imdbID');

        $repository = $this->getDoctrine()->getRepository('AppBundle:Movie');
        $product = $repository->findOneBy(
            array('imdbID' => $imdbID)
        );

        if ($product) {
            $this->get('session')->getFlashBag()->add('info', "Movie already exists");
            return $this->redirectToRoute('search');
        }

        $response = $this->get("http")->JSONRequest('http://www.omdbapi.com/?i=' . $imdbID . '&plot=short&tomatoes=true&r=json');

        $movie = $serializer->deserialize(json_encode($response), 'AppBundle\Entity\Movie', 'json');

        $em = $this->getDoctrine()->getManager();

        $em->persist($movie);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', "Movie added successfully");

        return $this->redirectToRoute('movies');
    }
}
