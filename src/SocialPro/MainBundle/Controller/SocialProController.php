<?php

namespace SocialPro\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SocialProController extends Controller
{
    public function indexAction()
    {
        return $this->render('SocialProMainBundle:SocialPro:index.html.twig');
    }
    public function mainpageAction()
    {
        return $this->render('SocialProMainBundle:SocialPro:mainpage.html.twig');
    }
}