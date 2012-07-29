<?php

namespace Ldc\SliderImageBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Ldc\SliderImageBundle\Entity\SliderImage;

class SliderImageHandler
{
    protected $form;
    protected $request;
    protected $em;

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
            $this->form->bind($this->request);

            if( $this->form->isValid() )
            {
            	 // On appelle la méthode onSucess qui va effectuer le traitement, on la décrit juste en dessous.
                // $this->form->getData() représente l'objet traité par le formulaire, une instance d'Article dans notre cas.
                $this->onSuccess($this->form->getData());
                return true;
            }
        }

        return false;
    }

    public function onSuccess(SliderImage $event)
    {
        $this->em->persist($event);
        $this->em->flush();
    }
}