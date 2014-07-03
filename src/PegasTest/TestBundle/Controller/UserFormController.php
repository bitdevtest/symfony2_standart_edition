<?php

namespace PegasTest\TestBundle\Controller;

use PegasTest\TestBundle\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\Translator;

class UserFormController extends Controller
{

	public function indexAction()
	{

		$data=array();

		$request = $this->getRequest();
		$form = $this->createForm(new MessageType())
			->add("submit","submit",array("label" => "button.send"));

		if($request->isMethod("POST")){
			/*$form->submit($request);
			if($form->isValid()){
				$em = $this->getDoctrine()->getManager();

				$contractor = $form->getData();
				$contractor->setOperator($this->getCurrentOperator());
				$em->persist($contractor);
				$em->flush();
				return $this->redirectToInfo();
			}*/
		}
		$data["form"] = $form->createView();

		return $this->render('PegasTestTestBundle:UserForm:index.html.twig', array(
			"form"=>$form->createView()

		));

	}
}

