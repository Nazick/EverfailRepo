<?php

namespace EverFail\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PartType extends AbstractType {

	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
				->add('price', null, array('label' => 'Price (Rs.)',
					'attr' => array('pattern' => '[0-9]+(.[0-9]{2})?')))
				->add('purchasedDate', 'date', array('label' => 'Date of Purchase',
					'widget' => 'single_text'))
				->add('vendorWarranty', 'integer', array(
					'label' => 'Vendor\'s Warranty (months)',
					'attr' => array('min' => 0)))
				->add('vendor', null, array('label' => 'Vendor',
					'empty_value' => false))
				->add('service', null, array('label' => 'Used in Service',
					'empty_value' => '[unused]',
					'empty_data' => null,
					'disabled' => true))
				->add('category', null, array('label' => 'Category',
					'empty_value' => false))
				->add('amount','integer',array('label'=>'Amount',
					'mapped'=>false))
		;
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults(array(
			'data_class' => 'EverFail\MainBundle\Entity\Part'
		));
	}

	/**
	 * @return string
	 */
	public function getName() {
		return 'everfail_mainbundle_part';
	}

}
