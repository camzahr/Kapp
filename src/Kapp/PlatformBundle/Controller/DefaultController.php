<?php

namespace Kapp\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KappPlatformBundle:Default:index.html.twig', array('name' => $name));
    }
}
