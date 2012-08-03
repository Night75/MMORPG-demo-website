<?php

namespace Ldc\UserBundle\Handler;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class AuthenticationHandler implements AuthenticationFailureHandlerInterface, LogoutSuccessHandlerInterface, AuthenticationSuccessHandlerInterface
{
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {       
        $referer = $request->headers->get('referer');       
        $request->getSession()->setFlash('error', $exception->getMessage());

        return new RedirectResponse($referer);
    }
	
	function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
    	$referer = $request->headers->get('referer');
        return new RedirectResponse($referer);
    }
	
    public function onLogoutSuccess(Request $request) 
    {
        $referer = $request->headers->get('referer');
        return new RedirectResponse($referer);
    }
}
