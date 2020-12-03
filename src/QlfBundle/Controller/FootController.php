<?php

namespace QlfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FootController extends Controller
{
    public function footAction($name)
    {
        // return $this->render('QlfBundle:Default:index.html.twig');
        return $this->render('@Qlf/FOOT/foot.html.twig',array('joueur'=>$name));
    }
 
}
