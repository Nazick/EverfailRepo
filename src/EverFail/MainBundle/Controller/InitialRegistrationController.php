<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace EverFail\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EverFail\MainBundle\Form\CarRegistrationType;
use Symfony\Component\HttpFoundation\Request;

class InitialRegistrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('EverFailMainBundle:Default:index.html.twig');
    }
    
    public function registerCarAction(Request $request){
        $form = $this->createForm(new CarRegistrationType());
        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            $regNumber=$data->getRegNumber();
            $this->get('logger')->info(gettype($regNumber));
            $em =$this->getDoctrine()->getEntityManager();
            $repository =$em->getRepository('EverFailMainBundle:Car');
            $result = $repository->findBy(array('regNumber'=>$regNumber));
            if($result != null)
                return $this->render('EverFailMainBundle:initialRegistration:resultsCar.html.twig', array('form' => $form->createView(),'result' => $result));
            else
                return $this->render('EverFailMainBundle:initialRegistration:noResultCar.html.twig',array('form' => $form->createView()));
        }
        return $this->render('EverFailMainBundle:initialRegistration:carRegistration.html.twig', array('form' => $form->createView()));
    }
}
?>
