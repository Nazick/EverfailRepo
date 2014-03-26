<?php

namespace EverFail\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CarType extends AbstractType {

	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
				->add('regNumber', null, array('label' => 'Registration Number'))
				->add('model', null, array('label' => 'Model'))
				->add('manufactureYear', 'date', array('label' => 'Year of Manufacture',
					'widget' => 'single_text'))
				->add('mileage', 'integer', array('label' => 'Mileage', 'attr' => array('min' => 0)))
		;
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults(array(
			'data_class' => 'EverFail\MainBundle\Entity\Car'
		));
	}

	/**
	 * @return string
	 */
	public function getName() {
		return 'everfail_mainbundle_car';
	}

}
