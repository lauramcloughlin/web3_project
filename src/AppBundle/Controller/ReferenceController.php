<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Reference;
use AppBundle\Entity\Bibliography;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


/**
 * Reference controller.
 *
 * @Route("reference")
 */
class ReferenceController extends Controller
{
    /**
     * Lists all reference entities.
     *
     * @Route("/", name="reference_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $references = $em->getRepository('AppBundle:Reference')->findAllPublicRefs();

        return $this->render('reference/index.html.twig', array(
            'references' => $references,
        ));
    }


    /**
     * Lists all users references entities.
     *
     * @Route("/user", name="reference_user")
     * @Method("GET")
     */
    public function userReferenceAction()
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $userReferences = $em->getRepository('AppBundle:Reference')
            ->getReferencesByUser($user);

        return $this->render('reference/user.html.twig', array(
            'references' => $userReferences,
        ));
    }



    /**
     * Creates a new reference entity.
     *
     * @Route("/new", name="reference_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $reference = new Reference();
        $form = $this->createForm('AppBundle\Form\ReferenceType', $reference);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = new User();
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $reference->setUser($user);

            $em = $this->getDoctrine()->getManager();

            $em->persist($reference);
            $em->flush();

            return $this->redirectToRoute('reference_show', array('id' => $reference->getId()));
        }

        return $this->render('reference/new.html.twig', array(
            'reference' => $reference,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reference entity.
     *
     * @Route("/{id}", name="reference_show")
     * @Method("GET")
     */
    public function showAction(Reference $reference)
    {
        $deleteForm = $this->createDeleteForm($reference);

        return $this->render('reference/show.html.twig', array(
            'reference' => $reference,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Finds and displays a reference entity.
     *
     * @Route("/{id}/2", name="reference_show2")
     * @Method("GET")
     */
    public function showAnonAction(Reference $reference)
    {
        $deleteForm = $this->createDeleteForm($reference);

        return $this->render('reference/show2.html.twig', array(
            'reference' => $reference,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing reference entity.
     *
     * @Route("/{id}/edit", name="reference_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reference $reference)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $deleteForm = $this->createDeleteForm($reference);
        $editForm = $this->createForm('AppBundle\Form\ReferenceType', $reference);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reference_show', array('id' => $reference->getId()));
        }

        return $this->render('reference/edit.html.twig', array(
            'reference' => $reference,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reference entity.
     *
     * @Route("/{id}", name="reference_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reference $reference)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $form = $this->createDeleteForm($reference);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reference);
            $em->flush();
        }

        return $this->redirectToRoute('reference_index');
    }

    /**
     * Creates a form to delete a reference entity.
     *
     * @param Reference $reference The reference entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reference $reference)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reference_delete', array('id' => $reference->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
