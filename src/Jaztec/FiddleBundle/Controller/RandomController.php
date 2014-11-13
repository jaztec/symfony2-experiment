<?php

namespace Jaztec\FiddleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @link http://symfony.com/doc/current/book/page_creation.html
 */
class RandomController extends Controller
{
    /**
     * Returning any input
     * @param mixed $var
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($var)
    {
        return $this->render(
            'JaztecFiddleBundle:Random:index.html.twig',
            array(
                'var' => $var,
            )
        );
    }
}
