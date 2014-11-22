<?php

namespace Jaztec\FiddleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'JaztecFiddleBundle:Index:index.html.twig', 
            array()
        );
    }
}
