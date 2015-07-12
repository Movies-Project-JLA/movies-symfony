<?php
/**
 * Created by PhpStorm.
 * User: devel
 * Date: 18/06/15
 * Time: 16:39
 */

namespace MoviesBundle\Manager;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMException;
use HolaBundle\Entity\Person;

class PersonService {

    private $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function getPersons() {
        return $this->entityManager->getRepository('MoviesBundle:Person')->findAll();
    }

    public function getPerson($id) {
        $person = $this->entityManager->getRepository('MoviesBundle:Person')->findOneById($id);

        if (!$person) {
            return false;
        }

        return $person;
    }

    public function removePerson($person)
    {
        try {
            $this->entityManager->remove($person);
            $this->entityManager->flush();
        } catch(ORMException $e) {
            return false;
        } catch(\Exception $e) {
            return false;
        }
        return true;
    }

}