<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Bibliography;
use AppBundle\Entity\Reference;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Bibliography controller.
 *
 * @Route("bibliography")
 */
class BibliographyController extends Controller
{
    /**
     * Lists all bibliography entities.
     *
     * @Route("/", name="bibliography_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bibliographies = $em->getRepository('AppBundle:Bibliography')->findAll();

        return $this->render('bibliography/index.html.twig', array(
            'bibliographies' => $bibliographies,
        ));
    }

    /**
     * Lists all users bibliographies entities.
     *
     * @Route("/user", name="bibliography_user")
     * @Method("GET")
     */
    public function userBibliographyAction()
    {

        $user = $this->getUser();
        //$userId = $user->getId();

        $em = $this->getDoctrine()->getManager();

        $userBibliographies = $em->getRepository('AppBundle:Bibliography')
            ->getBibliographiesByUser($user);

        return $this->render('bibliography/user.html.twig', array(
            'bibliographies' => $userBibliographies,
        ));
    }

    /**
     * Creates a new bibliography entity.
     *
     * @Route("/new", name="bibliography_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bibliography = new Bibliography();
        $form = $this->createForm('AppBundle\Form\BibliographyType', $bibliography);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = new User();
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $bibliography->setUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($bibliography);
            $em->flush();

            return $this->redirectToRoute('bibliography_show', array('id' => $bibliography->getId()));
        }

        return $this->render('bibliography/new.html.twig', array(
            'bibliography' => $bibliography,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bibliography entity.
     *
     * @Route("/{id}", name="bibliography_show")
     * @Method("GET")
     */
    public function showAction(Bibliography $bibliography)
    {
        $deleteForm = $this->createDeleteForm($bibliography);

        return $this->render('bibliography/show.html.twig', array(
            'bibliography' => $bibliography,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bibliography entity.
     *
     * @Route("/{id}/edit", name="bibliography_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Bibliography $bibliography)
    {
        $deleteForm = $this->createDeleteForm($bibliography);
        $editForm = $this->createForm('AppBundle\Form\BibliographyType', $bibliography);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bibliography_show', array('id' => $bibliography->getId()));
        }

        return $this->render('bibliography/edit.html.twig', array(
            'bibliography' => $bibliography,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bibliography entity.
     *
     * @Route("/{id}", name="bibliography_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Bibliography $bibliography)
    {
        $form = $this->createDeleteForm($bibliography);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bibliography);
            $em->flush();
        }

        return $this->redirectToRoute('bibliography_index');
    }

    /**
     * Creates a form to delete a bibliography entity.
     *
     * @param Bibliography $bibliography The bibliography entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bibliography $bibliography)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bibliography_delete', array('id' => $bibliography->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
