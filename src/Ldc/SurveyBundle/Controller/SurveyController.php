<?php

namespace Ldc\SurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use Ldc\SurveyBundle\Entity\Survey;
use Ldc\SurveyBundle\Form\Handler\SurveyFormHandler;
use Ldc\SurveyBundle\Form\Type\SurveyFormType;

class SurveyController extends Controller
{
    public function voteAction($id)
    {
    	$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcSurveyBundle:Survey")->find($id);	
		//$entity = $em->getRepository("LdcSurveyBundle:Survey")->getLastSurvey();	
		
		$entity->setMode(Survey::VOTE);
    	if(!$entity){
			throw $this->createNotFoundException("Impossible de trouver le sondage recherche");
		}
		
		$form = $this->createForm(new SurveyFormType,$entity);	
		$formHandler = new SurveyFormHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		
		if($formHandler->process())
		{
			$session = $this->getRequest()->getSession();
			$session->set('survey_answered', 'true');
			return $this->redirect($this->getRequest()->headers->get('referer'));
		}
		
		return $this->render("LdcSurveyBundle:public:vote.html.twig",array(
			"survey" => $entity,
		));
	}
	
	public function resultAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcSurveyBundle:Survey")->find($id);	
		if(!$entity){
			throw $this->createNotFoundException("Impossible de trouver le sondage recherche");
		}
		return $this->render("LdcSurveyBundle:public:result.html.twig",array(
			"answers" => $entity->getAnswers(),
			"survey" => $entity,
		));
	}
}
    	