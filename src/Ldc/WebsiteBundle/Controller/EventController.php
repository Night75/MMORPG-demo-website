<?php
namespace Ldc\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Ldc\WebsiteBundle\Handler\DataLoginHandler;
use Symfony\Component\HttpFoundation\Response;
use Ldc\EventBundle\Entity\Event;

class EventController extends Controller
{
	public function indexAction()
	{
    	$data = array("page" => "liste des evenements");
		
		//======== Chargement des donnees utilisateur
		$loginData = new DataLoginHandler($this->container);
		
		//======== Chargement des Evenements
		$em = $this->getDoctrine()->getEntityManager();
		$events = $em->getRepository("LdcEventBundle:Event")->findLatestEvents(new \Datetime("now"));
		$eventGroups = $em->getRepository("LdcEventBundle:Event")->groupByMonth($events);

		//======== Hydratation du tableau de donnees
		$data["eventGroups"] = $eventGroups;		
		$data = array_merge($data, $loginData->getData());
		return $this->render("LdcWebsiteBundle:events:index.html.twig", $data);
	}
}   