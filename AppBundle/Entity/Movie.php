<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="movie")
 */
class Movie {
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Id;
	/**
     * @ORM\Column(type="text")
     */
	protected $Title;
	/**
     * @ORM\Column(type="text")
     */
	protected $Year;
	/**
     * @ORM\Column(type="text")
     */
	protected $Rated;
	/**
     * @ORM\Column(type="text")
     */
	protected $Released;
	/**
     * @ORM\Column(type="text")
     */
	protected $Runtime;
	/**
     * @ORM\Column(type="text")
     */
	protected $Genre;
	/**
     * @ORM\Column(type="text")
     */
	protected $Director;
	/**
     * @ORM\Column(type="text")
     */
	protected $Writer;
	/**
     * @ORM\Column(type="text")
     */
	protected $Actors;
	/**
     * @ORM\Column(type="text")
     */
	protected $Plot;
	/**
     * @ORM\Column(type="text")
     */
	protected $Language;
	/**
     * @ORM\Column(type="text")
     */
	protected $Country;
	/**
     * @ORM\Column(type="text")
     */
	protected $Awards;
	/**
     * @ORM\Column(type="text")
     */
	protected $Poster;
	/**
     * @ORM\Column(type="text")
     */
	protected $Metascore;
	/**
     * @ORM\Column(type="text")
     */
	protected $imdbRating;
	/**
     * @ORM\Column(type="text")
     */
	protected $imdbVotes;
	/**
     * @ORM\Column(type="text")
     */
	protected $imdbID;
	/**
     * @ORM\Column(type="text")
     */
	protected $Type;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoMeter;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoImage;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoRating;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoReviews;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoFresh;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoRotten;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoConsensus;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoUserMeter;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoUserRating;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoUserReviews;
	/**
     * @ORM\Column(type="text")
     */
	protected $tomatoURL;
	/**
     * @ORM\Column(type="text")
     */
	protected $DVD;
	/**
     * @ORM\Column(type="text")
     */
	protected $BoxOffice;
	/**
     * @ORM\Column(type="text")
     */
	protected $Production;
	/**
     * @ORM\Column(type="text")
     */
	protected $Website;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Movie
     */
    public function setTitle($title)
    {
        $this->Title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Movie
     */
    public function setYear($year)
    {
        $this->Year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->Year;
    }

    /**
     * Set rated
     *
     * @param string $rated
     *
     * @return Movie
     */
    public function setRated($rated)
    {
        $this->Rated = $rated;

        return $this;
    }

    /**
     * Get rated
     *
     * @return string
     */
    public function getRated()
    {
        return $this->Rated;
    }

    /**
     * Set released
     *
     * @param string $released
     *
     * @return Movie
     */
    public function setReleased($released)
    {
        $this->Released = $released;

        return $this;
    }

    /**
     * Get released
     *
     * @return string
     */
    public function getReleased()
    {
        return $this->Released;
    }

    /**
     * Set runtime
     *
     * @param string $runtime
     *
     * @return Movie
     */
    public function setRuntime($runtime)
    {
        $this->Runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return string
     */
    public function getRuntime()
    {
        return $this->Runtime;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Movie
     */
    public function setGenre($genre)
    {
        $this->Genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->Genre;
    }

    /**
     * Set director
     *
     * @param string $director
     *
     * @return Movie
     */
    public function setDirector($director)
    {
        $this->Director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string
     */
    public function getDirector()
    {
        return $this->Director;
    }

    /**
     * Set writer
     *
     * @param string $writer
     *
     * @return Movie
     */
    public function setWriter($writer)
    {
        $this->Writer = $writer;

        return $this;
    }

    /**
     * Get writer
     *
     * @return string
     */
    public function getWriter()
    {
        return $this->Writer;
    }

    /**
     * Set actors
     *
     * @param string $actors
     *
     * @return Movie
     */
    public function setActors($actors)
    {
        $this->Actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return string
     */
    public function getActors()
    {
        return $this->Actors;
    }

    /**
     * Set plot
     *
     * @param string $plot
     *
     * @return Movie
     */
    public function setPlot($plot)
    {
        $this->Plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return string
     */
    public function getPlot()
    {
        return $this->Plot;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Movie
     */
    public function setLanguage($language)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Movie
     */
    public function setCountry($country)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Set awards
     *
     * @param string $awards
     *
     * @return Movie
     */
    public function setAwards($awards)
    {
        $this->Awards = $awards;

        return $this;
    }

    /**
     * Get awards
     *
     * @return string
     */
    public function getAwards()
    {
        return $this->Awards;
    }

    /**
     * Set poster
     *
     * @param string $poster
     *
     * @return Movie
     */
    public function setPoster($poster)
    {
        $this->Poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string
     */
    public function getPoster()
    {
        return $this->Poster;
    }

    /**
     * Set metascore
     *
     * @param string $metascore
     *
     * @return Movie
     */
    public function setMetascore($metascore)
    {
        $this->Metascore = $metascore;

        return $this;
    }

    /**
     * Get metascore
     *
     * @return string
     */
    public function getMetascore()
    {
        return $this->Metascore;
    }

    /**
     * Set imdbRating
     *
     * @param string $imdbRating
     *
     * @return Movie
     */
    public function setImdbRating($imdbRating)
    {
        $this->imdbRating = $imdbRating;

        return $this;
    }

    /**
     * Get imdbRating
     *
     * @return string
     */
    public function getImdbRating()
    {
        return $this->imdbRating;
    }

    /**
     * Set imdbVotes
     *
     * @param string $imdbVotes
     *
     * @return Movie
     */
    public function setImdbVotes($imdbVotes)
    {
        $this->imdbVotes = $imdbVotes;

        return $this;
    }

    /**
     * Get imdbVotes
     *
     * @return string
     */
    public function getImdbVotes()
    {
        return $this->imdbVotes;
    }

    /**
     * Set imdbID
     *
     * @param string $imdbID
     *
     * @return Movie
     */
    public function setImdbID($imdbID)
    {
        $this->imdbID = $imdbID;

        return $this;
    }

    /**
     * Get imdbID
     *
     * @return string
     */
    public function getImdbID()
    {
        return $this->imdbID;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Movie
     */
    public function setType($type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set tomatoMeter
     *
     * @param string $tomatoMeter
     *
     * @return Movie
     */
    public function setTomatoMeter($tomatoMeter)
    {
        $this->tomatoMeter = $tomatoMeter;

        return $this;
    }

    /**
     * Get tomatoMeter
     *
     * @return string
     */
    public function getTomatoMeter()
    {
        return $this->tomatoMeter;
    }

    /**
     * Set tomatoImage
     *
     * @param string $tomatoImage
     *
     * @return Movie
     */
    public function setTomatoImage($tomatoImage)
    {
        $this->tomatoImage = $tomatoImage;

        return $this;
    }

    /**
     * Get tomatoImage
     *
     * @return string
     */
    public function getTomatoImage()
    {
        return $this->tomatoImage;
    }

    /**
     * Set tomatoRating
     *
     * @param string $tomatoRating
     *
     * @return Movie
     */
    public function setTomatoRating($tomatoRating)
    {
        $this->tomatoRating = $tomatoRating;

        return $this;
    }

    /**
     * Get tomatoRating
     *
     * @return string
     */
    public function getTomatoRating()
    {
        return $this->tomatoRating;
    }

    /**
     * Set tomatoReviews
     *
     * @param string $tomatoReviews
     *
     * @return Movie
     */
    public function setTomatoReviews($tomatoReviews)
    {
        $this->tomatoReviews = $tomatoReviews;

        return $this;
    }

    /**
     * Get tomatoReviews
     *
     * @return string
     */
    public function getTomatoReviews()
    {
        return $this->tomatoReviews;
    }

    /**
     * Set tomatoFresh
     *
     * @param string $tomatoFresh
     *
     * @return Movie
     */
    public function setTomatoFresh($tomatoFresh)
    {
        $this->tomatoFresh = $tomatoFresh;

        return $this;
    }

    /**
     * Get tomatoFresh
     *
     * @return string
     */
    public function getTomatoFresh()
    {
        return $this->tomatoFresh;
    }

    /**
     * Set tomatoRotten
     *
     * @param string $tomatoRotten
     *
     * @return Movie
     */
    public function setTomatoRotten($tomatoRotten)
    {
        $this->tomatoRotten = $tomatoRotten;

        return $this;
    }

    /**
     * Get tomatoRotten
     *
     * @return string
     */
    public function getTomatoRotten()
    {
        return $this->tomatoRotten;
    }

    /**
     * Set tomatoConsensus
     *
     * @param string $tomatoConsensus
     *
     * @return Movie
     */
    public function setTomatoConsensus($tomatoConsensus)
    {
        $this->tomatoConsensus = $tomatoConsensus;

        return $this;
    }

    /**
     * Get tomatoConsensus
     *
     * @return string
     */
    public function getTomatoConsensus()
    {
        return $this->tomatoConsensus;
    }

    /**
     * Set tomatoUserMeter
     *
     * @param string $tomatoUserMeter
     *
     * @return Movie
     */
    public function setTomatoUserMeter($tomatoUserMeter)
    {
        $this->tomatoUserMeter = $tomatoUserMeter;

        return $this;
    }

    /**
     * Get tomatoUserMeter
     *
     * @return string
     */
    public function getTomatoUserMeter()
    {
        return $this->tomatoUserMeter;
    }

    /**
     * Set tomatoUserRating
     *
     * @param string $tomatoUserRating
     *
     * @return Movie
     */
    public function setTomatoUserRating($tomatoUserRating)
    {
        $this->tomatoUserRating = $tomatoUserRating;

        return $this;
    }

    /**
     * Get tomatoUserRating
     *
     * @return string
     */
    public function getTomatoUserRating()
    {
        return $this->tomatoUserRating;
    }

    /**
     * Set tomatoUserReviews
     *
     * @param string $tomatoUserReviews
     *
     * @return Movie
     */
    public function setTomatoUserReviews($tomatoUserReviews)
    {
        $this->tomatoUserReviews = $tomatoUserReviews;

        return $this;
    }

    /**
     * Get tomatoUserReviews
     *
     * @return string
     */
    public function getTomatoUserReviews()
    {
        return $this->tomatoUserReviews;
    }

    /**
     * Set tomatoURL
     *
     * @param string $tomatoURL
     *
     * @return Movie
     */
    public function setTomatoURL($tomatoURL)
    {
        $this->tomatoURL = $tomatoURL;

        return $this;
    }

    /**
     * Get tomatoURL
     *
     * @return string
     */
    public function getTomatoURL()
    {
        return $this->tomatoURL;
    }

    /**
     * Set dVD
     *
     * @param string $dVD
     *
     * @return Movie
     */
    public function setDVD($dVD)
    {
        $this->DVD = $dVD;

        return $this;
    }

    /**
     * Get dVD
     *
     * @return string
     */
    public function getDVD()
    {
        return $this->DVD;
    }

    /**
     * Set boxOffice
     *
     * @param string $boxOffice
     *
     * @return Movie
     */
    public function setBoxOffice($boxOffice)
    {
        $this->BoxOffice = $boxOffice;

        return $this;
    }

    /**
     * Get boxOffice
     *
     * @return string
     */
    public function getBoxOffice()
    {
        return $this->BoxOffice;
    }

    /**
     * Set production
     *
     * @param string $production
     *
     * @return Movie
     */
    public function setProduction($production)
    {
        $this->Production = $production;

        return $this;
    }

    /**
     * Get production
     *
     * @return string
     */
    public function getProduction()
    {
        return $this->Production;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Movie
     */
    public function setWebsite($website)
    {
        $this->Website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->Website;
    }
}
