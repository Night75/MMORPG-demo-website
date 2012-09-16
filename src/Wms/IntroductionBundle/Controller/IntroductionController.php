<?php

namespace Wms\IntroductionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IntroductionController extends Controller
{
    public function indexAction()
    {
        return $this->render('WmsIntroductionBundle::index.html.twig');
    }
}
