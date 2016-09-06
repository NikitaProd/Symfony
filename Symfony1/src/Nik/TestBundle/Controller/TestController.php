<?php

namespace Nik\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class TestController extends Controller
{
    function indexAction(){
    	return $this->render("TestBundle:Test:index.html.twig") ;
    }
}