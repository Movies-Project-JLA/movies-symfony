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
use Symfony\Component\HttpFoundation\Request;

class PersonController extends Controller {

    public function newPersonAction(Request $request, $id)
    {
        
        $personFormType = new PersonType();

        $form = $this
            ->get('form.factory')
            ->create($personFormType);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isValid()) {

                $person = $form->getData();

                $personService = $this->get('person');

                if ($personService->persistPerson($person)) {

                    return new RedirectResponse($this->generateUrl('person_list'));
                } else {

                    die("bad fields");
                }

            } else {

                die("bad fields");
            }
        } else {

            return new Response($this->renderView('@Hola/Operation/create.html.twig', array(
                'form' => $form->createView()
            )));
        }
    }

    public function removePersonAction(Request $request)
    {

    }
}