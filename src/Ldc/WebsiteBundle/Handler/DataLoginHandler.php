<?php

namespace Ldc\WebsiteBundle\Handler;

use Symfony\Component\Security\Core\SecurityContext;

class DataLoginHandler
{
	protected $lastUsername;
	protected $error;
	protected $csrfToken;
	
	/**
	 * @var $request \Symfony\Component\HttpFoundation\Request 
	 * @var $session \Symfony\Component\HttpFoundation\Session
	 */
	public function __construct($container)
	{
		$request = $container->get('request');
        $session = $request->getSession();
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $this->error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $this->error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $this->error = '';
        }

        if ($this->error) {
            // TODO: this is a potential security risk (see http://trac.symfony-project.org/ticket/9523)
            $this->error = $this->error->getMessage();
        }
        // last username entered by the user
        $this->lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);
        $this->csrfToken = $container->get('form.csrf_provider')->generateCsrfToken('authenticate');
		$request->getSession()->set('_security.target_path', $request->getUri());
	}

	public function getData()
	{
		return array( 
			'last_username' =>  $this->lastUsername,
            'error'         => $this->error,
            'csrf_token' => $this->csrfToken);
	}
	
}
