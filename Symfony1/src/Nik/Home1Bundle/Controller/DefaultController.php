<?php

namespace Nik\Home1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NikHome1Bundle:Default:index.html.twig');
    }
}
