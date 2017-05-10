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
        $argsArray = [
        ];

    // {{ dump(app.session.get('basket')) }}


        $templateName = 'basket/index';
        return $this->render($templateName . '.html.twig', $argsArray);
    }


    /**
     * @Route("/add/{id}", name="reference_basket_add")
     */
    public function addToReferenceBasket(Reference $reference)
    {
        $references = [];

        $session = new Session();
        if($session->has('basket')){
            $references = $session->get('basket');
        }

        $id = $reference->getId();

         if(!array_key_exists($id, $references)){

            $references[$id] = $reference;

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
        $session->remove('basket');

        return $this->redirectToRoute('reference_basket_index');
    }


    /**
     * @Route("/delete/{id}", name="reference_basket_delete")
     */
    public function deleteAction($id)
    {
        $reference = [];

        $session = new Session();
        if($session->has('basket')){
            $reference = $session->get('basket');
        }

       if(array_key_exists($id, $reference)){
            unset($reference[$id]);

            if(sizeof($reference) < 1){
                return $this->redirectToRoute('reference_basket_clear');
            }

          $session->set('basket', $reference);
        }

        return $this->redirectToRoute('reference_basket_index');
    }

}
