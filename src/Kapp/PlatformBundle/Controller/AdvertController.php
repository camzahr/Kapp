<?php

namespace Kapp\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
  {
    $content = $this
    ->get('templating')
    ->render('KappPlatformBundle:Advert:index.html.twig', array(
        'nom' => 'Jeremy'
    )
);
    return new Response($content);
  }
}