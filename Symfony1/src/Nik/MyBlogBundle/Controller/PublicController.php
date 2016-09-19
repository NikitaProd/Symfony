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

	function articleAction ($slug, $annee, $_locale, $_format)
	{
        return $this->render("MyBlogBundle:Public:article.html.twig", array(
			'slug' => $slug,
			'annee' => $annee,
			'lang' => $_locale,
			'format' => $_format,
		));
	}

}

?>