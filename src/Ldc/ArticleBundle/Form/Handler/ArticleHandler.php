<?php

namespace Ldc\ArticleBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Ldc\ArticleBundle\Entity\Article;
use Symfony\Component\Httpfoundation\Response;

class ArticleHandler
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
        if($this->request->getMethod() == 'POST' )
        {
            $this->form->bind($this->request);
			
            if($this->form->isValid())
            {
            	//------------- Assignation du la propriete image_name
				/*$image_name = $this->form["image"]->getData()->getClientOriginalName();
				$this->form->getData()->setImageName($image_name);*/
                $this->onSuccess($this->form->getData());
                return true;
            }
        }

        return false;
    }

    public function onSuccess(Article $article)
    {
        $this->em->persist($article);
        $this->em->flush();
    }
}