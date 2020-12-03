<?php

namespace QlfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // return $this->render('QlfBundle:Default:index.html.twig');
        return $this->render('@Qlf/Default/index.html.twig');
    }
    public function index01Action()
    {
        $x=1919;
        // return $this->render('QlfBundle:Default:index.html.twig');
        return $this->render('@Qlf/Default/index01.html.twig',array('x'=>$x));
    }
}
