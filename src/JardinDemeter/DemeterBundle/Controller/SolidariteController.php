<?php

namespace JardinDemeter\DemeterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SolidariteController extends Controller{
    /**
     * @Route("/solidarite", name="solidarite")
     * @Template()
     */
    public function solidariteAction()
    {
        return array();
    }
}
