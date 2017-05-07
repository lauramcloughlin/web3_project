<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use AppBundle\Entity\User;
use AppBundle\Entity\Reference;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tag controller.
 *
 * @Route("tag")
 */
class TagController extends Controller
{
    /**
     * Lists all tag entities.
     *
     * @Route("/", name="tag_index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('AppBundle:Tag')->findAllPublicTags();

        return $this->render('tag/index.html.twig', array(
            'tags' => $tags,
        ));
    }


    /**
     * Lists all tag entities.
     *
     * @Route("/proposed", name="tag_proposed")
     * @Method("GET")
     */
    public function proposedAction()
    {

        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('AppBundle:Tag')->findAllProposedTags();

        return $this->render('tag/proposed.html.twig', array(
            'tags' => $tags,
        ));
    }


    /**
     * Lists all users tags entities.
     *
     * @Route("/user", name="tag_user")
     * @Method("GET")
     */
    public function userTagAction()
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $userTags = $em->getRepository('AppBundle:Tag')
            ->getTagsByUser($user);

        return $this->render('tag/user.html.twig', array(
            'tags' => $userTags,
        ));
    }


    /**
     * Action to vote.
     *
     * @Route("/{id}/vote", name="tag_vote")
     * @Method("GET")
     */
    public function voteAction(Request $request, Tag $tag)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        //var_dump($currentUserRole);

       // if (is_granted('ROLE_USER')){
        if ($user  == 'anon.'){
            $noOfVotes = 1;
        }else{
            $noOfVotes = 5;
        }

        $currentNoOfVotes = $tag->getNoOfVotes();


        $newNoOfVotes = $currentNoOfVotes + $noOfVotes;

        $tag->setNoOfVotes($newNoOfVotes);

        $this->getDoctrine()->getManager()->flush();

        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('AppBundle:Tag')->findAllProposedTags();

        return $this->render('tag/proposed.html.twig', array(
            'tags' => $tags,
        ));

    }


    /**
     * Creates a new tag entity.
     *
     * @Route("/new", name="tag_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tag = new Tag();
        $form = $this->createForm('AppBundle\Form\TagType', $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user = new User();
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $tag->setUser($user);
            $tag->setNoOfVotes(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            return $this->redirectToRoute('tag_show', array('id' => $tag->getId()));
        }

        return $this->render('tag/new.html.twig', array(
            'tag' => $tag,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new anon tag entity.
     *
     * @Route("/new2", name="tag_new_user")
     * @Method({"GET", "POST"})
     */
    public function newAnonTagAction(Request $request)
    {
        $tag = new Tag();
        $form = $this->createForm('AppBundle\Form\Tag2Type', $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

           // $user = new User();
          //  $user = $this->get('security.token_storage')->getToken()->getUser();
          //  $tag->setUser($user);

            $tag->setNoOfVotes(0);
            $tag->setStatus('Proposed');

            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            return $this->redirectToRoute('tag_proposed');
        }

        return $this->render('tag/new2.html.twig', array(
            'tag' => $tag,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tag entity.
     *
     * @Route("/{id}", name="tag_show")
     * @Method("GET")
     */
    public function showAction(Tag $tag)
    {

        return $this->render('tag/show.html.twig', array(
            'tag' => $tag,
        ));
    }


    /**
     * Displays a form to edit an existing tag entity.
     *
     * @Route("/{id}/edit", name="tag_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tag $tag)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $deleteForm = $this->createDeleteForm($tag);
        $editForm = $this->createForm('AppBundle\Form\TagType', $tag);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {



            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tag_show', array('id' => $tag->getId()));
        }

        return $this->render('tag/edit.html.twig', array(
            'tag' => $tag,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tag entity.
     *
     * @Route("/{id}", name="tag_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tag $tag)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $form = $this->createDeleteForm($tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tag);
            $em->flush();
        }

        return $this->redirectToRoute('tag_index');
    }

    /**
     * Creates a form to delete a tag entity.
     *
     * @param Tag $tag The tag entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tag $tag)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tag_delete', array('id' => $tag->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
