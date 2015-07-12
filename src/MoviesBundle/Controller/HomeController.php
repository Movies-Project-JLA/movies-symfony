<?php
/**
 * Created by PhpStorm.
 * User: devel
 * Date: 9/07/15
 * Time: 18:25
 */

namespace MoviesBundle\Controller;


use MoviesBundle\Form\Type\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {

    public function indexAction(Request $request) {
        return $this->render('@Movies/index.html.twig');
    }
}