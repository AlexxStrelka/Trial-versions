<?php

namespace Alex\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AlexTestBundle:Default:index.html.twig');
    }

    /**
     *
     * @Route ("/{name}")
     */
    public function sayNameAction($name)
    {
        return $this->render('AlexTestBundle:Default:renderName.html.twig', array(
            'name'  => $name
        ));
    }
}
