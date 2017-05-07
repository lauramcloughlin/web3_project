<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * Admin controller.
 * @Route("admin")
 */
class UserController extends Controller
{

    /**
     * Lists all users.
     * @Route("/", name="admin_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAll();

        return $this->render('admin/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * @Route("/new", name="admin_new")
     */
    public function newAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);
        if ($form->isValid()) {
            /** @var User $user */
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash(
                'success',
                sprintf('User Account created by : %s!', $this->getUser()->getEmail())
            );

            return $this->redirectToRoute('admin_index');
        }
        return $this->render('admin/new.html.twig', [
            'form' => $form->createView()
        ]);
    }




    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="admin_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm('AppBundle\Form\UserType', $user);
        //$form = $this->createForm(UserType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_index');
        }

        return $this->render('admin/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $form->createView(),
        ));
    }



}