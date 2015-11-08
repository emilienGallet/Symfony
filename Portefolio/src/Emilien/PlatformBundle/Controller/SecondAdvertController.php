<?php


// src/OC/PlatformBundle/Controller/AdvertController.php


namespace Emilien\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class SecondAdvertController extends Controller
{
  public function indexAction()
  {
    
    $content = $this->get('templating')->render('EmilienPlatformBundle:SecondAdvert:index.html.twig', 
    	array(
    		'nom' => 'winzou'
        )

);


    return new Response($content);
  }
}