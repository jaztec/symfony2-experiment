<?php

namespace Jaztec\FiddleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JaztecFiddleBundle:Default:index.html.twig', array('name' => $name));
    }
}
