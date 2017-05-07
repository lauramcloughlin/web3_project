<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Reference;
use AppBundle\Entity\Bibliography;
use AppBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage");
     */
    public function indexAction(Request $request)
    {

        $argsArray = [
            'name' => 'Bibliography Home Page'
        ];

        return $this->render('/index.html.twig', $argsArray);
    }



}