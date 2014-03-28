<?php

namespace JardinDemeter\DemeterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContactController extends Controller{
    /**
     * @Route("/contact", name="contact")
     * @Template()
     */
    public function contactAction()
    {
        return array();
    }
}
