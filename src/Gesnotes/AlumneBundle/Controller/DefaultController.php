<?php

namespace Gesnotes\AlumneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AlumneBundle:Default:index.html.twig', array('name' => $name));
    }
}
