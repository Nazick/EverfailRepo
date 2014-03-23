<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace EverFail\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InitialRegistrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('EverFailMainBundle:Default:index.html.twig');
    }
}
?>
