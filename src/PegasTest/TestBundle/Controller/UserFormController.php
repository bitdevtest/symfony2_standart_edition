<?php

namespace PegasTest\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserFormController extends Controller
{

	public function indexAction()
	{

		$data=array();
		//return new Response('<html><body>Hello '.'ololo'.'!</body></html>');
		return $this->render('PegasTestTestBundle:UserForm:layout.html.twig', array(

		));

	}
}

