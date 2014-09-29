<?php

namespace Sistema\SisreimpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/inicio", name="inicio_home")
     * @Template()
     */
    public function indexAction()
    {
        
        return array('' => '');
    }

    /**
     * @Route("/login", name="inicio_login")
     * @Template()
     */
    public function loginAction()
    {
        
        return array('' => '');
    }
}
