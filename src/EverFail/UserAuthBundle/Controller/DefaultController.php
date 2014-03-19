<?php

namespace EverFail\UserAuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EverFailUserAuthBundle:Default:index.html.twig', array('name' => $name));
    }
}
