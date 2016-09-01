<?php

namespace Nik\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NikBlogBundle:Default:index.html.twig');
    }
}
