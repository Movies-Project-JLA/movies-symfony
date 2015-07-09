<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 9/07/15
 * Time: 13:14
 */

namespace MoviesBundle\Entity;


class Producer extends BaseEntity {
    private $movie;

    /**
     * @return mixed
     */

    public function getMovie(){
        return $this->movie;
    }

    /**
     * @param mixed $movie
     */

    public function setMovie(Movie $movie){
        $this->movie = $movie;
    }
}