<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EverFail\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EverFail\MainBundle\Form\CustomerRegistrationType;
use EverFail\MainBundle\Form\CarRegistrationType;
use Symfony\Component\HttpFoundation\Request;

class InitialRegistrationController extends Controller {

    public function indexAction() {
        return $this->render('EverFailMainBundle:Default:index.html.twig');
    }

    public function registerCarAction(Request $request,$CustId) {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('EverFailMainBundle:Car')->findAll();
        $customer = $em->getRepository('EverFailMainBundle:Customer')->findOneBy(array('id'=>$CustId));
        $form = $this->createForm(new CarRegistrationType());
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            $regNumber = $data->getRegNumber();
            $this->get('logger')->info(gettype($regNumber));
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('EverFailMainBundle:Car');
            $result = $repository->findBy(array('regNumber' => $regNumber));
            if ($result != null)
                return $this->render('EverFailMainBundle:initialRegistration:resultsCar.html.twig', array('form' => $form->createView(), 'car' => $result,'customer'=>$customer));
            else
                return $this->render('EverFailMainBundle:initialRegistration:noResultCar.html.twig', array('form' => $form->createView(),'customer'=>$customer));
        }
        return $this->render('EverFailMainBundle:initialRegistration:carRegistration.html.twig', array('form' => $form->createView(),'entities' => $entities,'customer'=>$customer));
    }

    public function registerCustomerAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('EverFailMainBundle:Customer')->findAll();
        $form = $this->createForm(new CustomerRegistrationType());
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            $custName = $data->getCustName();
            $this->get('logger')->info(gettype($custName));
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('EverFailMainBundle:Customer');
            $result = $repository->findBy(array('custName' => $custName));
 
            if ($result != null)
                return $this->render('EverFailMainBundle:initialRegistration:resultsCustomer.html.twig', array('form' => $form->createView(), 'result' => $result));
            else
                //return $this->render('EverFailMainBundle:default:index.html.twig', array('form' => $form->createView()));
                return $this->render('EverFailMainBundle:initialRegistration:noResultsCustomer.html.twig', array('form' => $form->createView()));
        }
        return $this->render('EverFailMainBundle:initialRegistration:customerRegistration.html.twig', array('form' => $form->createView(),'entities' => $entities));
    }
    
    public function showCarAction($CustId,$CarId)
    {
        $em = $this->getDoctrine()->getManager();

        $car = $em->getRepository('EverFailMainBundle:Car')->find($CarId);
        $customer = $em->getRepository('EverFailMainBundle:Customer')->findOneBy(array('id'=>$CustId));

        if (!$car) {
            throw $this->createNotFoundException('Unable to find Car entity.');
        }


        return $this->render('EverFailMainBundle:initialRegistration:showCar.html.twig', array(
            'car'=> $car,'customer'=>$customer));
    }
    
    public function showCustomerAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EverFailMainBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Customer entity.');
        }


        return $this->render('EverFailMainBundle:initialRegistration:showCustomer.html.twig', array(
            'customerentity'      => $entity));
    }
}

?>
