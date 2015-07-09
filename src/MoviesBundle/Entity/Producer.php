<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 9/07/15
 * Time: 13:14
 */

namespace MoviesBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;

class Producer extends BaseEntity {

    private $movies;

    function __construct()
    {
        $this->movies = new ArrayCollection();
    }


    /**
     * @return mixed
     */

    public function getMovies(){
        return $this->movies;
    }

    public function addMovie(Movie $movie)
    {
        $this->movies[] = $movie;
        return $this;
    }

    public function removeMovie(Movie $movie)
    {
        $this->movies->removeElement($movie);
        return $this;
    }
}