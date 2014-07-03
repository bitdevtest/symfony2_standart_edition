<?php

namespace PegasTest\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function indexAction()
    {

		$data=array();
		//return new Response('<html><body>Hello '.'ololo'.'!</body></html>');
        return $this->render('PegasTestTestBundle:Default:index.html.twig', array(

		));

    }
}

