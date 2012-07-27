<?php

namespace Ldc\UserBundle\Form\Handler;

use FOS\UserBundle\Form\Handler\RegistrationFormHandler as BaseHandler;
use Symfony\Component\HttpFoundation\Response;

class RegistrationFormHandler extends BaseHandler
{
    public function process($confirmation = false)
    {
        $user = $this->userManager->createUser();
        $this->form->setData($user);
		return "ok";
		return (var_dump($this->form));
        if ('POST' == $this->request->getMethod()) {
        	//return new Response("regisform");
            $this->form->bindRequest($this->request);
			
            if ($this->form->isValid()) {

                // do your custom logic here

                return true;
            }
        }
        //return false;
    }
}