<?php
namespace Ldc\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Ldc\WebsiteBundle\Handler\DataLoginHandler;
use Symfony\Component\HttpFoundation\Response;

class SurveyController extends Controller
{
	public function indexAction()
	{
    	$data = array("page" => "Sondages");
		
		//======== Chargement des donnees utilisateur
		$loginData = new DataLoginHandler($this->container);
		
		//======== Chargement des Evenements
		$em = $this->getDoctrine()->getEntityManager();
		$surveys = $em->getRepository("LdcSurveyBundle:Survey")->findAll();

		//======== Hydratation du tableau de donnees
		$data["surveys"] = $surveys;		
		$data = array_merge($data, $loginData->getData());
		return $this->render("LdcWebsiteBundle:surveys:index.html.twig", $data);
	}
}   