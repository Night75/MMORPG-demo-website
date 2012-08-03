<?php
namespace Ldc\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
//use Ldc\WebsiteBundle\Handler\DataLoginHandler;
use Symfony\Component\HttpFoundation\Response;
use Ldc\UserBundle\Entity\User;
use Ldc\UserBundle\Form\Handler\AdminProfileFormHandler;
use Ldc\UserBundle\Form\Type\EditFormType;
use Ldc\UserBundle\Form\Type\AdminProfileFormType;
use FOS\UserBundle\Document\UserManager;

class AdminController extends Controller
{   
    public function listAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$users = $em->getRepository("LdcUserBundle:User")->findall();
		
		return $this->render("LdcUserBundle:Admin:list.html.twig",array(
			"users" => $users
		));
    }
	
	/**
     * Show the user
     */
    public function editAction($id)
    {
        //$user = $this->container->get('security.context')->getToken()->getUser();
       /* if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		*/
		$em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository('LdcUserBundle:User')->find($id);
      
	 	 if (!$user) {
            throw $this->createNotFoundException('Unable to find User entity.');
		}
		$form = $this->createForm(new AdminProfileFormType, $user);
		//$form =  $this->container->get('fos_user.profile.form');
     	 // On crée le gestionnaire pour ce formulaire, avec les outils dont il a besoin
		$formHandler = new AdminProfileFormHandler($form, $this->get('request'), $this->container->get('fos_user.user_manager'));
		//$formHandler = new AdminProfileFormHandler($form, $this->get('request'), $em);
		
		// On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
		if($formHandler->process($user))
		{
			$this->get("session")->setFlash("user","Les informations de l'utilisateur " .$user->getUsername() ." ont bien ete modifiees.");
			return $this->redirect($this->generateUrl('ldc_user_admin_confirmed'));
		}

		return $this->render("LdcUserBundle:Admin:edit.html.twig",array(
			"form" => $form->createView(),
			"user" => $user,
		));
	
		 
    }
	
	public function confirmedAction()
	{
		return $this->render("LdcUserBundle:Admin:confirmed.html.twig");	
	}
	
	public function deleteAction($id)
	{
	
		$em = $this->getDoctrine()->getEntityManager();
		$user = $em->getRepository('LdcUserBundle:User')->find($id);
		$name = $user->getUsername();
        if (!$user) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
		
        $em->remove($user);
        $em->flush();
		$this->container->get('session')->setFlash('user_delete_success', "L'utilisateur {$name} a bien été supprimé");
		return $this->redirect($this->generateUrl('ldc_user_admin_list'));
	}
}
