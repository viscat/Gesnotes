<?php

namespace Gesnotes\AssignaturaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AssignaturaBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function ajudaAction()
    {
        return $this->render('AssignaturaBundle:Default:ajuda.html.twig');
    }
}
