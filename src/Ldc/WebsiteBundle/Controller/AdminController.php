<?php
namespace Ldc\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
	public function indexAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		
		//======== Chargement des Utilisateurs
		$user = $em->getRepository("LdcUserBundle:User")->getLastUser();
		$numUser = $em->getRepository("LdcUserBundle:User")->countAll();
		
		//======== Chargement des Sliders
		$sliderImage = $em->getRepository("LdcSliderImageBundle:SliderImage")->getLastSliderImage();
		$numSliderImage = $em->getRepository("LdcSliderImageBundle:SliderImage")->countAll();
		
		//======== Chargement des Evenements
		$event = $em->getRepository("LdcEventBundle:Event")->getLastEvent();
		$numEvents = $em->getRepository("LdcEventBundle:Event")->countAll();
		
		//======== Chargement des Articles
		$article = $em->getRepository("LdcArticleBundle:Article")->getLastArticle();
		$numArticles = $em->getRepository("LdcArticleBundle:Article")->countAll();
		
		//======== Chargement des Sondages
		$survey = $em->getRepository("LdcSurveyBundle:Survey")->getLastSurvey();
		$numSurveys = $em->getRepository("LdcSurveyBundle:Survey")->countAll();
		
		//return new Response(var_dump($survey));
		
		$data = array(
		"dataGroup" => array(
			array("name" => "slider", "lastItem" =>$sliderImage , "itemCount" => $numSliderImage),
			array("name" => "evenement", "lastItem" =>$event , "itemCount" => $numEvents),
			array("name" => "article", "lastItem" =>$article , "itemCount" => $numArticles),
			array("name" => "sondage", "lastItem" =>$survey , "itemCount" => $numSurveys),
			),
		"user" => array("name" => "utilisateur", "lastItem" =>$user , "itemCount" => $numUser,)
		);
		
		return $this->render("LdcWebsiteBundle:admin:index.html.twig",$data);
	}
}