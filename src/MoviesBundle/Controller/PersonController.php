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

class PersonController extends Controller {

    public function listAction(Request $request) {
        $persons = $this->get('person_service')->getPersons();

        return $this->render('@Movies/Person/list.html.twig', array('persons' => $persons));
    }

    public function viewAction(Request $request, $id) {
        $person = $this->get('person_service')->getPerson($id);

        if (!$person) {
            return $this->render('::404.html.twig');
        }

        $personFormType = new PersonType();

        $form = $this
            ->get('form.factory')
            ->create($personFormType, $person, [
                'action' => $this->generateUrl('person_view', array('id' => $person->getId())),
            ]);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isValid()) {

                $person = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($person);
                $em->flush();

                return new RedirectResponse($this->generateUrl('person_list'));
            }
        }

        return $this->render('MoviesBundle:Person:view.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function newAction(Request $request) {
        $personFormType = new PersonType();

        $form = $this
            ->get('form.factory')
            ->create($personFormType, null, [
                'action' => $this->generateUrl('person_persist'),
            ]);

        return new Response($this->renderView('MoviesBundle:Person:view.html.twig', array(
            'form' => $form->createView()
        )));
    }

    public function persistAction(Request $request) {
        $personFormType = new PersonType();

        $form = $this
            ->get('form.factory')
            ->create($personFormType, null, [
                'action' => $this->generateUrl('person_persist'),
            ]);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $person = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();

            return new RedirectResponse($this->generateUrl('person_list'));
        }

        return new Response($this->renderView('MoviesBundle:Person:view.html.twig', array(
            'form' => $form->createView()
        )));

    }

    public function removeAction(Request $request, $id) {
        $this->get('person_service')->removePerson($id);

        return new RedirectResponse($this->generateUrl('person_list'));
    }
}