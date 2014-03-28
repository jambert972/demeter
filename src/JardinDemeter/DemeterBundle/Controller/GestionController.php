<?php

namespace JardinDemeter\DemeterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JardinDemeter\DemeterBundle\Entity\Connexion;
use Symfony\Component\HttpFoundation\Request;

class GestionController extends Controller{
    
     /**
     * @Route("/insererGest", name="insererGest")
     * @Template()
     */    
    public function insererGestAction(Request $request)
    {
        // crée une tâche et lui donne quelques données par défaut pour cet exemple
        $task = new Connexion();

        $form = $this->createFormBuilder($task)
            ->add('login', 'text')
            ->add('passe', 'password')
            ->add('groupe', 'choice', array(
    'choices' => array('0' => 'Administrateur', '1' => 'Employé Déméter', '2' => 'Intervenants Externes'),
    'preferred_choices' => array('1'),
))
   
            
            ->add('Envoyer', 'submit')
            ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isValid()){
            $data = $form->getData();
                if ($data->getLogin()) {
                    $task = $task->setLogin($data->getLogin());
                }
                if ($data->getPasse()) {
                    $task = $task->setPasse($data->getPasse());
                }
                if ($data->getGroupe()) {
                    $task = $task->setGroupe($data->getGroupe());
                }
                $em = $this->getDoctrine()->getManager();

                $em->persist($task);
                $em->flush();
                return $this->redirect($this->generateUrl('accueil'));
        }


        return $this->render('JardinDemeterDemeterBundle:Gestion:insererGest.html.twig', array(
            'form' => $form->createView(),
        ));
    }


/**
     * @Route("/logout", name="logout")
     * @Template()
     */
    public function logoutAction()
    {
        return array();
    }
}