<?php

namespace Dojo\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DojoBackendBundle:Default:index.html.twig', array('name' => $name));
    }
}
