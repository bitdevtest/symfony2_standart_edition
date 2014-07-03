<?php


namespace PegasTest\TestBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

abstract class AFormType extends AbstractType{
	/**
	 * @param OptionsResolverInterface $resolver
	 */
	final public function setDefaultOptions(OptionsResolverInterface $resolver)
	{

		$resolver->setDefaults(array(
			'translation_domain'=>'forms'

		));

		$this->setLocalOptions($resolver);
	}

	public function setLocalOptions(OptionsResolverInterface $resolver)
	{



	}
}
