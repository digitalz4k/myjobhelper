<?php

namespace Dz\JobsBundle\Controller;

use Dz\JobsBundle\Entity\Application;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JobsBundle:Default:index.html.twig');
    }
}
