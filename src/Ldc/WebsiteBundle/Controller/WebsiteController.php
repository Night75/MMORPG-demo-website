<?php
namespace Ldc\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Ldc\WebsiteBundle\Handler\DataLoginHandler;
use Symfony\Component\HttpFoundation\Response;

class WebsiteController extends Controller
{   
    public function indexAction()
    {
    	//$this->container->get('session')->setLocale('fr');
    	$data = array("page" => "accueil");
		$loginData = new DataLoginHandler($this->container);
     	$data = array_merge($data, $loginData->getData());
		return $this->render('LdcWebsiteBundle:Website:accueil.html.twig', $data );
		
		//return new Response(var_dump($data));
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

