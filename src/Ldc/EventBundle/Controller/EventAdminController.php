<?php

namespace Ldc\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ldc\EventBundle\Entity\Event;
use Ldc\EventBundle\Form\Type\EventType;
use Ldc\EventBundle\Form\Handler\EventHandler;
use Symfony\Component\Httpfoundation\Response;

class EventAdminController extends Controller
{
    public function newAction()
    {
    	$entity = new Event();
		$entity->setAuthor($this->getUser());
		$form = $this->createForm(new EventType,$entity);
		
        return $this->render('LdcEventBundle:admin:new.html.twig', array('form' => $form->createView()));
    }
	
	public function createAction()
	{
		$entity = new Event();
		$request = $this->getRequest();
		$form = $this->createForm(new EventType, $entity);
		$formHandler = new EventHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		// On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
		if( $formHandler->process() )
		{
			$this->get("session")->setFlash("event","L'evenement a bien ete cree");
			return $this->redirect($this->generateUrl('ldceventbundle_confirmed'));
		}
		return $this->render("LdcEventBundle:admin:new.html.twig", array("form" =>$form->createView()));
	}
	
	public function editAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcEventBundle:Event")->find($id);
		if(!$entity){
			throw $this->createNotFoundException("Impossible de trouver l'evenement recherche");
		}
			
		$form = $this->createForm(new EventType,$entity);
		//return new Response(var_dump($form));
		return $this->render("LdcEventBundle:admin:edit.html.twig",array(
			"form" => $form->createView(),
			"id" => $id,
		));
	}
	
	public function updateAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcEventBundle:Event")->find($id);
		
		if(!$entity){
			throw $this->createNotFoundException("Impossible de trouver l'evenement recherche");
		}
		$form = $this->createForm(new EventType,$entity);
		$formHandler = new EventHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
	
		if( $formHandler->process() )
		{
			$this->get("session")->setFlash("event","L'evenement a bien ete modifie");
			return $this->redirect($this->generateUrl('ldceventbundle_confirmed'));
		}
		
		//----------------------- Page par defaut renvoyant le formulaire
		   return $this->render('LdcEventBundle:admin:update.html.twig', array(
		  'form' =>$form->createView()
		));
	}
	
	public function deleteAction($id)
	{	
		$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcEventBundle:Event")->find($id);
  
        if (!$entity) {
            throw $this->createNotFoundException("Impossible de trouver l'evenement recherche");
		}
        $em->remove($entity);
        $em->flush();
		$this->get("session")->setFlash("event","L'evenement a bien ete supprime");
		return $this->redirect($this->generateUrl('ldceventbundle_confirmed'));
	}

	public function listAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$events = $em->getRepository("LdcEventBundle:Event")->findLatestEvents(new \Datetime("now"));
		//return new Response(var_dump($eventGroups));	
		
		return $this->render("LdcEventBundle:admin:list.html.twig", array(
			"events" => $events
		));
	}
	
	public function confirmedAction()
	{
		return $this->render("LdcEventBundle:admin:confirmed.html.twig");
	}
}
