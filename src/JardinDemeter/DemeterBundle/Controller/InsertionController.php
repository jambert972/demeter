<?php

namespace JardinDemeter\DemeterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class InsertionController extends Controller{
    /**
     * @Route("/chantier", name="chantier")
     * @Template()
     */
    public function chantierAction()
    {
        return array();
    }
    
    /**
     * @Route("/jardin", name="jardin")
     * @Template()
     */
    public function jardinAction()
    {
        return array();
    }
    
    /**
     * @Route("/touffe", name="touffe")
     * @Template()
     */
    public function touffeAction()
    {
        return array();
    }
    
    /**
     * @Route("/rodes", name="rodes")
     * @Template()
     */
    public function rodesAction()
    {
        return array();
    }
}
