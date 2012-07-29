<?php
namespace Ldc\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Ldc\WebsiteBundle\Handler\DataLoginHandler;
use Symfony\Component\HttpFoundation\Response;
use Ldc\ArticleBundle\Entity\Article;

class ArticleController extends Controller
{
	public function indexAction($page)
	{
    	$data = array("page" => "liste des articles");
		$loginData = new DataLoginHandler($this->container);

		$em = $this->getDoctrine()->getEntityManager();
		$articles = $em->getRepository("LdcArticleBundle:Article")->getArticlesLimit($page,5);
		
		$data = array_merge($data, $loginData->getData(), array("articles" => $articles));
		return $this->render("LdcWebsiteBundle:articles:index.html.twig",$data);
	}
	
	public function showAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcArticleBundle:Article")->find($id);
		
		if(!$entity){
			throw $this->createNotFoundException("Impossible de trouver l'article recherche");
		}
		$loginData = new DataLoginHandler($this->container);
		
		$data = array_merge($loginData->getData(), array("article" => $entity));
		return $this->render("LdcWebsiteBundle:articles:show.html.twig",$data);
	}
}   