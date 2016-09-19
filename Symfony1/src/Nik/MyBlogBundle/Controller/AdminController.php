<?php

namespace Nik\MyBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller {
	public function indexAction(){
		return $this->render('MyBlogBundle:Admin:index.html.twig');
	}
}


?>