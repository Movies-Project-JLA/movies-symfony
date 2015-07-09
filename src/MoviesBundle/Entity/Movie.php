<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 07/07/15
 * Time: 16:30
 */

namespace MoviesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Movie extends BaseEntity{

    protected $releaseDate;

    protected $genre;

    protected $synopsis;

    protected $promotionalArt;

    protected $rating;

    protected $trailer;

    protected $producer;

    protected $actors;

    protected $director;

    function __construct()
    {
        $this->actors = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param mixed $actors
     */
    public function addActor($actors)
    {
        $this->actors[] = $actors;
        return $this;
    }

    public function removeActor(Person $actor)
    {
        $this->actors->removeElement($actor);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     */
    public function setDirector(Person $director)
    {
        $this->director = $director;
        return $this;
    }

    /**
     * @return mixed
     */

    public function getReleaseDate(){
        return $this->releaseDate;
    }

    /**
     * @param mixed $date
     */

    public function setReleaseDate(\DateTime $date){
        $this->releaseDate = $date;
        return $this;
    }

    /**
     * @return mixed
     */

    public function getGenre(){
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */

    public function setGenre(string $genre){
        $this->genre =$genre;
        return $this;
    }

    /**
     * @return mixed
     */

    public function getSynopsis(){
        return $this->synopsis;
    }

    /**
     * @param mixed $synopsis
     */

    public function setSynopsis(string $synopsis){
        $this->synopsis =$synopsis;
        return $this;
    }

    /**
     * @return mixed
     */

    public function getPromotionalArt(){
        return $this->promotionalArt;
    }

    /**
     * @param mixed $art
     */

    public function setPromotionalArt(string $art){
        $this->promotionalArt =$art;
        return $this;
    }

    /**
     * @return mixed
     */

    public function getRating(){
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */

    public function setRating(int $rating){
        $this->rating =$rating;
        return $this;
    }

    /**
     * @return mixed
     */

    public function getTrailer(){
        return $this->trailer;
    }

    /**
     * @param mixed $trailer
     */

    public function setTrailer(string $trailer){
        $this->trailer =$trailer;
        return $this;
    }

    /**
     * @return mixed
     */

    public function getProducer(){
        return $this->producer;
    }

    /**
     * @param mixed $producer
     */

    public function setProducer(Producer $producer){
        $this->producer =$producer;
        return $this;
    }
}