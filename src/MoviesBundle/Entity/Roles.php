<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 7/07/15
 * Time: 17:31
 */

namespace MoviesBundle\Entity;


class Roles {
    protected $movie;

    protected $person;

    protected $role;

    /**
     * @return mixed
     */

    public function getMovie(){
        return $this->releaseDate;
    }

    /**
     * @param mixed $movie
     */

    public function setMovie(Movie $movie){
        $this->movie = $movie;
    }

    /**
     * @return mixed
     */

    public function getPerson(){
        return $this->person;
    }

    /**
     * @param mixed $person
     */

    public function setPerson(Person $person){
        $this->person =$person;
    }

    /**
     * @return mixed
     */

    public function getRole(){
        return $this->role;
    }

    /**
     * @param mixed $role
     */

    public function setRole(string $role){
        $this->role =$role;
    }
}