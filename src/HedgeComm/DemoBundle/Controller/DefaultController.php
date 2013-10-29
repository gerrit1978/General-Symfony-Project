<?php

namespace HedgeComm\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HedgeCommDemoBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function hahaAction() {
      return new Response("Blih");
    }
}
