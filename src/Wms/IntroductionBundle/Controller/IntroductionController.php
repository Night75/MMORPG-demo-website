<?php

namespace Wms\IntroductionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IntroductionController extends Controller
{
    public function accueilAction()
    {
        return $this->render('WmsIntroductionBundle:introduction:accueil.html.twig');
    }
	
	public function cvAction()
    {
        return $this->render('WmsIntroductionBundle:introduction:cv.html.twig');
    }
	
	public function aproposAction()
    {
        return $this->render('WmsIntroductionBundle:introduction:apropos.html.twig');
    }
	
	public function contactAction()
    {
        return $this->render('WmsIntroductionBundle:introduction:contact.html.twig');
    }
}
