<?php

namespace AG\Bundle\StartsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	 /**
     * @Route("/test/{name}")
     * @Method({"GET"})
     */
    public function indexAction($name)
    {
        return $this->render('AGStartsBundle:Default:index.html.twig', array('name' => $name));
    }
}
