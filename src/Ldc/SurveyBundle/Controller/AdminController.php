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
        	
            return new Response("OK FOOO");
        }
		
        return $this->render('LdcSurveyBundle:admin:new.html.twig', array('form' => $form->createView()));
    }
}
