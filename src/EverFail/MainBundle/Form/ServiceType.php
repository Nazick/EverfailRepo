<?php

namespace EverFail\MainBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiceType extends AbstractType {

	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
//		$em = $this->getDoctrine()->getManager();
//		$qb = $em->getRepository('EverFailMainBundle:Category')->createQueryBuilder('n');
//		$result = $qb->where('n.stock > 0')->getQuery()->getResult();
//
//		//add category list
//		$con = Doctrine::getInstance()->connection();
//		$st = $con->execute("SELECT name FROM Category where Stock > 0");
//		$result = $st->fetchAll();

		$builder
				->add('serviceDate', null, array('label' => 'Date'))
				->add('serviceCharge', null, array('label' => 'Charge (Rs.)'))
				->add('note', null, array('label' => 'Note'))
				->add('car', null, array(
					'label' => 'Car',
					'empty_value' => false))
				->add('cust', null, array(
					'label' => 'Customer',
					'empty_value' => false))
				->add('invoice', null, array('label' => 'Invoice'))
				->add('category', 'entity', array(
					'class' => 'EverFailMainBundle:Category',
					'expanded' => true,
					'label' => 'Parts Used',
					'multiple' => true,
					'mapped' => false,
					'query_builder' => function(EntityRepository $er) {
						return $er->createQueryBuilder('u')
								->where('u.stock > 0');
					},));
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults(array(
			'data_class' => 'EverFail\MainBundle\Entity\Service'
		));
	}

	/**
	 * @return string
	 */
	public function getName() {
		return 'everfail_mainbundle_service';
	}

}
