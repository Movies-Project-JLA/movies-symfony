<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 07/07/15
 * Time: 16:30
 */

namespace MoviesBundle\Entity;

class Person extends BaseEntity{
    protected $dateOfBirth;

    protected $gender;

    protected $bio;

    protected $photo;

    /**
     * @return mixed
     */

    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $date
     */

    public function setDateOfBirth(\DateTime $date){
        $this->dateOfBirth = $date;
    }

    /**
     * @return mixed
     */

    public function getGender(){
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */

    public function setGender(string $gender){
        $this->gender =$gender;
    }

    /**
     * @return mixed
     */

    public function getBio(){
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */

    public function setBio(string $bio){
        $this->bio =$bio;
    }

    /**
     * @return mixed
     */

    public function getPhoto(){
        return $this->photo;
    }

    /**
     * @param mixed $bio
     */

    public function setPhoto(string $photo){
        $this->photo =$photo;
    }
}