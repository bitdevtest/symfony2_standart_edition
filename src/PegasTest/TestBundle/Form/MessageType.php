<?php

namespace PegasTest\TestBundle\Form;

use PegasTest\TestBundle\Entity\Message;
use PegasTest\TestBundle\Form\AFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AFormType
{

	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options){
		$builder
			->add('subject','text',array('label'=>'label.message.subject'))
			->add('text', 'text', array('label'=>'label.message.text', 'required'=>true))


			//->add('submit','submit',array('label' => 'button.submit.save'))

		;
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setLocalOptions(OptionsResolverInterface $resolver){
		$resolver->setDefaults(array(
			'data_class' => Message::getClassName()
		));
	}

	/**
	 * @return string
	 */
	public function getName(){
		return 'message';
	}

}


