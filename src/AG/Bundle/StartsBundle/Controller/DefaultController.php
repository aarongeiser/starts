<?php

namespace AG\Bundle\StartsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AGStartsBundle:Default:index.html.twig', array('name' => $name));
    }
}
