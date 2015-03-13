<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
	
    public function indexAction($name)
    {
    	return $this->render(
    		'AcmeHelloBundle:Hello:index.html.twig',//.php extension instead of .twig is also allowed
    		array('name' => $name)
		);
    }
}
	