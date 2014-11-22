<?php

namespace Jaztec\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'JaztecCmsBundle:Default:index.html.twig',
            array()
        );
    }
}
