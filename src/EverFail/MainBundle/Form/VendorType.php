<?php

namespace EverFail\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VendorType extends AbstractType {

	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
				->add('vendorName', null, array('label' => 'Name'))
				->add('email', 'email', array('label' => 'E-mail Address'))
		;
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults(array(
			'data_class' => 'EverFail\MainBundle\Entity\Vendor'
		));
	}

	/**
	 * @return string
	 */
	public function getName() {
		return 'everfail_mainbundle_vendor';
	}

}
