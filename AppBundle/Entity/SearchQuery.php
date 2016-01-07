<?php

namespace AppBundle\Entity;

class SearchQuery {
    protected $title;
    protected $year;

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year = null) {
        $this->year = $year;
    }
}
