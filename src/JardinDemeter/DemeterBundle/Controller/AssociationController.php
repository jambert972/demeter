<?php

namespace JardinDemeter\DemeterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AssociationController extends Controller{
    
    /**
     * @Route("/objectifs", name="objectifs")
     * @Template()
     */
    public function objectifsAction()
    {
        return array();
    }
    
    /**
     * @Route("/fonctionnement", name="fonctionnement")
     * @Template()
     */
    public function fonctionnementAction()
    {
        return array();
    }
    
    /**
     * @Route("/processus", name="processus")
     * @Template()
     */
    public function processusAction()
    {
        return array();
    }
}
