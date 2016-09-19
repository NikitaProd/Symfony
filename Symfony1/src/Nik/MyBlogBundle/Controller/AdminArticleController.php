<?php

namespace Nik\MyBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminArticleController extends Controller {
	public function ajouterAction(){
		return $this->render('MyBlogBundle:AdminArticle:ajouter.html.twig');
	}
}


?>