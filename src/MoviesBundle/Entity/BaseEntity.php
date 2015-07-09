<?php
/**
 * Created by PhpStorm.
 * User: devel
 * Date: 6/07/15
 * Time: 17:49
 */

namespace MoviesBundle\Entity;


abstract class BaseEntity {

    protected $id;

    protected $name;

    protected $createdAt;

    protected $updatedAt;

    function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt( \DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }


}