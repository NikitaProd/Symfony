<?php

namespace Nik\MyBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller 
{
	
	function indexAction() 
	{
		return $this->render("MyBlogBundle:Public:index.html.twig");
	}

	function pageAction($page)
	{
		return $this->render("MyBlogBundle:Public:page.html.twig", array(
			'page' => $page,
		));
	}

	function articleAction($slug){
        $article = array(
			'titre'   => "Titre de l'article",
			'date'    => new \DateTime(),
			'contenu' => "Contenu : c'est Cool !",
			'auteur'  => "Nik",	
			'token'   =>  $this->getRequest()->query->get('token'),

	);

	return $this->render("MyBlogBundle:Public:article.html.twig", array(
		'article' => $article,

		));
}

}
?>