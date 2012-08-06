<?php

namespace Ldc\SurveyBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Ldc\SurveyBundle\Entity\Survey;

class SurveyFormHandler
{
    protected $form;
    protected $request;
    protected $em;
	protected $survey;
	
    public function __construct(Form $form, Request $request, EntityManager $em)
    {
        $this->form    = $form;
        $this->request = $request;
        $this->em      = $em;
    }

    public function process()
    {
        if( $this->request->getMethod() == 'POST' )
        {
    	    $this->survey = $this->form->getData(); //On garde la copie originale de l'entite pour empecher la modification de nos entites
		    $this->form->bind($this->request);
			
			$answer_selected = $this->form->getData()->getAnswerSelected();
			
			//On verifiera juste que l'id de la reponse selectionnee est bien reliee au sondage correspondant
			if(!$this->survey->checkVote($answer_selected)){
				return false; //Forme non valide on a essaye de trafiquer nos entites
			}		
            $this->onSuccess($this->survey);
            return true;
        }
        return false;
    }

    public function onSuccess(Survey $survey)
    {
        $this->em->persist($survey);
        $this->em->flush();
    }
}