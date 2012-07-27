<?php
namespace Ldc\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
//use Ldc\WebsiteBundle\Handler\DataLoginHandler;
use Symfony\Component\HttpFoundation\Response;
use Ldc\UserBundle\Entity\User;
use Ldc\UserBundle\Form\Handler\ProfileFormHandler;
use Ldc\UserBundle\Form\Type\EditFormType;
use Ldc\UserBundle\Form\Type\ProfileFormType;
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
		$form = $this->createForm(new ProfileFormType, $user);
		$form->bindRequest($request);

		//$form =  $this->container->get('fos_user.profile.form');
     	 // On crée le gestionnaire pour ce formulaire, avec les outils dont il a besoin
		$formHandler = new ProfileFormHandler($form, $this->get('request'), new UserManager);
		
		return new Response(var_dump($formHandler));	
		// On exécute le traitement du formulaire. S'il retourne true, alors le formulaire a bien été traité
		if( $formHandler->process() )
		{
		    return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $article->getId())) );
		}

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Profile:edit.html.'.$this->container->getParameter('fos_user.template.engine'),
         array('form' => $form->createView()));
		 
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
