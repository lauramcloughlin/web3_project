<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Reference;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Bibliography controller.
 *
 * @Route("/basket")
 */
class ReferenceBasketController extends Controller
{
    /**
     * @Route("/", name="reference_basket_index")
     */
    public function indexAction()
    {
        // no need to put reference array in Twig argument array - Twig can get data direct from session
        $argsArray = [
        ];

        $templateName = 'basket/index';
        return $this->render($templateName . '.html.twig', $argsArray);
    }


    /**
     * @Route("/add/{id}", name="reference_basket_add")
     */
    public function addToReferenceBasket(Reference $reference)
    {
        // default - new empty array
        $references = [];

        // if no 'references' array in the session, add an empty array
        $session = new Session();
        if($session->has('basket')){
            $references = $session->get('basket');
        }

        // get ID of reference
        $id = $reference->getId();

        // only try to add to array if not already in the array
        if(!array_key_exists($id, $references)){
            // append $elective to our list
            $references[$id] = $reference;

            // store updated array back into the session
            $session->set('basket', $references);
        }

        return $this->redirectToRoute('reference_basket_index');
    }
    /**
     * @Route("/clear", name="reference_basket_clear")
     */
    public function clearAction()
    {
        $session = new Session();
//        $session->clear();
        $session->remove('basket');

        return $this->redirectToRoute('reference_basket_index');
    }


    /**
     * @Route("/delete/{id}", name="reference_basket_delete")
     */
    public function deleteAction($id)
    {
        // default - new empty array
        $reference = [];

        // if no 'Bibliography' array in the session, add an empty array
        $session = new Session();
        if($session->has('basket')){
            $reference = $session->get('basket');
        }

        // only try to remove if it's in the array
        if(array_key_exists($id, $reference)){
            // remove entry with $id
            unset($reference[$id]);

            if(sizeof($reference) < 1){
                return $this->redirectToRoute('reference_basket_clear');
            }

            // store updated array back into the session
            $session->set('basket', $reference);
        }

        return $this->redirectToRoute('reference_basket_index');
    }

}
