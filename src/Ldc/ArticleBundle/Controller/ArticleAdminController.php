<?php

namespace Ldc\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ldc\ArticleBundle\Entity\Article;
use Ldc\ArticleBundle\Form\Type\ArticleType;
use Ldc\ArticleBundle\Form\Handler\ArticleHandler;
use Symfony\Component\Httpfoundation\Response;

class ArticleAdminController extends Controller
{
    public function newAction()
    {
		$entity = new Article();
		$entity->setAuthor($this->getUser());
		$form = $this->createForm(new ArticleType,$entity);

		$formHandler = new ArticleHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		// On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
		if($formHandler->process())
		{
			$this->get("session")->setFlash("event","L'article a bien ete cree");
			return $this->redirect($this->generateUrl('ldcarticlebundle_confirmed'));
		}
  		return $this->render('LdcArticleBundle:admin:new.html.twig', array('form' => $form->createView()));
    }
	
	public function confirmedAction()
	{
		return $this->render("LdcArticleBundle:admin:confirmed.html.twig");
	}
	
	public function editAction($id)
	{
		$entity = $this->getDoctrine()
                ->getRepository('Ldc\ArticleBundle\Entity\Article')
                ->find($id);
		if(!$entity){
			throw $this->createNotFoundException("Impossible de trouver l'article recherche");
		}
		//------- Mise en memoire de l'ancienne image si existante (permettra de la garder si aucun fichier n'est uploade)
		$entity->setPreviousImage($entity->getImage());
		$image_name = $entity->getImage();				// Variable nom de l'image a passer au template twig
		$form = $this->createForm(new ArticleType,$entity);
		$formHandler = new ArticleHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		
		// On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
		if($formHandler->process())
		{
			$this->get("session")->setFlash("event","L'article a bien ete cree");
			return $this->redirect($this->generateUrl('ldcarticlebundle_confirmed'));
		}
		
		return $this->render("LdcArticleBundle:admin:edit.html.twig",array(
			'form' => $form->createView(),
			"image_name" =>$image_name,
			"id" => $id
		));
	}
	
	public function indexAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$entities = $em->getRepository("LdcArticleBundle:Article")->findAll();
		
		return $this->render("LdcArticleBundle:admin:index.html.twig",array(
			"articles" => $entities,
		));
	}
	
	public function deleteAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$entity = $em->getRepository("LdcArticleBundle:Article")->find($id);
  
        if (!$entity) {
            throw $this->createNotFoundException("Impossible de trouver l'article recherche");
		}
        $em->remove($entity);
        $em->flush();
		$this->get("session")->setFlash("event","L'article a bien ete supprime");
		return $this->redirect($this->generateUrl('ldcarticlebundle_confirmed'));
	}
}
