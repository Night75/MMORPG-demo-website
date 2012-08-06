<?php

namespace Ldc\SurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Ldc\SurveyBundle\Entity\Survey;
use Ldc\SurveyBundle\Form\Handler\SurveyHandler;
use Ldc\SurveyBundle\Form\Type\SurveyType;


class AdminController extends Controller
{
    public function newAction()
    {
       	$entity = new Survey();	
		$entity->setAuthor($this->getUser());
		$form = $this->createForm(new SurveyType,$entity);

        $formHandler = new SurveyHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		
        if($formHandler->process()){
           	$this->get("session")->setFlash("survey","Le sondage a bien ete cree");
			return $this->redirect($this->generateUrl('ldcsurveybundle_confirmed'));
        }
        return $this->render('LdcSurveyBundle:admin:new.html.twig', array('form' => $form->createView()));
    }
	
	public function listAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$entities = $em->getRepository("LdcSurveyBundle:Survey")->findAll();
		return $this->render("LdcSurveyBundle:admin:list.html.twig",array(
			"surveys" => $entities
		));	
	}
	
	public function deleteAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcSurveyBundle:Survey")->find($id);
		if (!$entity) {
            throw $this->createNotFoundException("Impossible de trouver l'evenement recherche");
		}
        $em->remove($entity);
        $em->flush();
		$this->get("session")->setFlash("survey","Le sondage a bien ete supprime");
		return $this->redirect($this->generateUrl('ldcsurveybundle_confirmed'));
	}
	
	public function confirmedAction()
	{
		return $this->render("LdcSurveyBundle:admin:confirmed.html.twig");
	}
}
