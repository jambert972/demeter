<?php

namespace JardinDemeter\DemeterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

class AccueilController extends Controller
{
    /**
     * @Route("/index", name="accueil")
     * @Template()
     */
    public function indexAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        $logger = $this->get('logger');
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
            $logger->err('Test1');
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $logger->err($error);
            
        }

        return $this->render('JardinDemeterDemeterBundle:Accueil:index.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error' => $error,
        ));
        $logger->err('Test3');           
    }
    

}
