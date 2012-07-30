<?php

namespace Ldc\SliderImageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ldc\SliderImageBundle\Entity\SliderImage;
use Ldc\SliderImageBundle\Form\Type\SliderImageType;
use Ldc\SliderImageBundle\Form\Handler\SliderImageHandler;
use Symfony\Component\Httpfoundation\Response;

class SliderImageAdminController extends Controller
{
	public function listAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$entities = $em->getRepository("LdcSliderImageBundle:SliderImage")->findAll();
		return $this->render("LdcSliderImageBundle:admin:list.html.twig",array(
			"sliders" => $entities
		));	
	}
	
	public function newAction()
	{
		// ------------------ VERIFICATION D'UN EMPLACEMENT LIBRE
		$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcSliderImageBundle:SliderImage")->find(4);	 	
		
		if($entity){ 
			$this->get("session")->setFlash("sliderImage",
			"Vous avez deja cree 4 emplacements pour le slider.
			Vous pouvez par contre modifier les emplacements existants.");
			return $this->redirect($this->generateUrl('ldcsliderimagebundle_confirmed'));
		}
		
		// ------------------ CREATION D'UN EMPLACEMENT
		$entity = new SliderImage();
		$entity->setAuthor($this->getUser());
		
		$form = $this->createForm(new SliderImageType,$entity);
		$formHandler = new SliderImageHandler($form,$this->get("request"),$em);
		if($formHandler->process()){
			$this->get("session")->setFlash("sliderImage","L'emplacement pour le slider a bien ete cree");
			return $this->redirect($this->generateUrl('ldcsliderimagebundle_confirmed'));
		}
		
		return $this->render("LdcSliderImageBundle:admin:new.html.twig",array(
			"form" => $form->createView(),
		));
	}
	
	public function editAction($id)
	{
		// ------------------ RECUPERATION D'UN EMPLACEMENT LIBRE
		$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcSliderImageBundle:SliderImage")->find($id);	 	
		$entity->setAuthor($this->getUser());
		$entity->setPreviousImage($entity->getImage());
		$image_name = $entity->getImage();				// Variable nom de l'image a passer au template twig
		
		if(!$entity){
			throw $this->createNotFoundException("Impossible de trouver l'article recherche");
		}
		
		$form = $this->createForm(new SliderImageType,$entity);
		$formHandler = new SliderImageHandler($form,$this->get("request"),$em);
		
		if($formHandler->process()){
			$this->get("session")->setFlash("sliderImage","L'emplacement pour le slider a bien ete modifie");
			return $this->redirect($this->generateUrl('ldcsliderimagebundle_confirmed'));
		}
		
		return $this->render("LdcSliderImageBundle:admin:edit.html.twig",array(
			"form" => $form->createView(),
			"image_name" => $image_name,
		));
	}
	
	public function confirmedAction()
	{
		return $this->render("LdcSliderImageBundle:admin:confirmed.html.twig");
	}
}
