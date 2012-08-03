<?php

namespace Ldc\WebsiteBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ldc\WebsiteBundle\Handler\DataLoginHandler;

class UserController extends Controller
{
    /**
     * Show the user
     */
    public function profileAction($id)
    {
    	$em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository("LdcUserBundle:User")->find($id);
		
		$loginData = new DataLoginHandler($this->container);
		$data = array_merge(array('user' => $user), $loginData->getData()); 
        if (!$user) {
         	throw $this->createNotFoundException("Impossible de trouver l'utilisateur recherche");
        }

        return $this->render("LdcWebsiteBundle:users:profile.html.twig",$data );
    }
}