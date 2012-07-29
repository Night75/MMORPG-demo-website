<?php
namespace Ldc\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Ldc\WebsiteBundle\Handler\DataLoginHandler;
use Symfony\Component\HttpFoundation\Response;
use Ldc\ArticleBundle\Entity\Article;

class WebsiteController extends Controller
{   
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();	
    	//$this->container->get('session')->setLocale('fr');
    	$data = array("page" => "accueil");
		
		//======== Chargement des infos User
		$loginData = new DataLoginHandler($this->container);		
		
		//======== Chargement des sliders
		$sliders = $em->getRepository("LdcSliderImageBundle:SliderImage")->findAll();

		//======== Chargement des Articles						
		$articles = $em->getRepository("LdcArticleBundle:Article")->getArticlesLimit(1,2);	
		
		//======== Chargement des Evenements
		$events = $em->getRepository("LdcEventBundle:Event")->findLatestEvents(new \Datetime("now"));
		$eventGroups = $em->getRepository("LdcEventBundle:Event")->groupByMonth($events);
		
		//======== Hydratation du tableau de donnees
		$data = array_merge($data, $loginData->getData()); 
		$data["articles"] = $articles;
		$data["eventGroups"] = $eventGroups;
     	$data["sliders"] = $sliders;
		
		return $this->render('LdcWebsiteBundle:website:index.html.twig', $data );
        return $this->container->get('templating')->renderResponse('designJFLdcBundle:Ldc:accueil.html.'.$this->container->getParameter('fos_user.template.engine'),
        		$data );
    }
	
	public function testAction()
	{
		 $message = \Swift_Message::newInstance()
        ->setSubject('Hello Email')
        ->setFrom('jfrancois.lai@gmail.com')
        ->setTo('jfrancois.lai@gmail.com')
  		->setBody('Here is the message itself')
 		->addPart('<q>Here is the message itself</q>', 'text/html')
  		//->attach(Swift_Attachment::fromPath('my-document.pdf'))
        //->setBody($this->renderView('LdcWebsiteBundle:test:email.txt.twig', array('name' => $name)))
    ;
    $this->get('mailer')->send($message);
		return new Response("OK FOOO");
	}
	
}

