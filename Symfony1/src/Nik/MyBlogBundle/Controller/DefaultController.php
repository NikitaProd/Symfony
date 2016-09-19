<?php

namespace Nik\MyBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyBlogBundle:Default:index.html.twig');
    }
}
