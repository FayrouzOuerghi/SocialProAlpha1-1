<?php

namespace SocialPro\MainBundle\Controller;

use SocialPro\MainBundle\Entity\Reclamation;
use SocialPro\MainBundle\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ReclamationController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function ajouterReclamationAction(Request $ma_requette)
    {
        $modele = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $modele);
        $form->handleRequest($ma_requette);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();

            return $this->redirectToRoute('afficher_Reclamation');
        }
        return $this->render('SocialProMainBundle:Reclamation:ajouterReclamation.html.twig', array('form' => $form->createView()));
    }


    public  function afficherReclamationAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $modele=$em->getRepository('SocialProMainBundle:Reclamation')->findAll();
        return $this->render('SocialProMainBundle:Reclamation:afficherReclamation.html.twig',array('modele'=>$modele));
    }

    public function  supprimerReclamationAction($id){
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository('SocialProMainBundle:Reclamation')->find($id);

        $em->remove($modele);
        $em->flush();

        return $this->redirectToRoute('afficher_Reclamation');
    }
    public  function  modifierReclamationAction(Request $requette,$id){
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository('SocialProMainBundle:Reclamation')->find($id);

        $form=$this->createForm(ReclamationType::class,$modele);
        $form->handleRequest($requette);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();

            return $this->redirectToRoute('afficher_Reclamation');
        }
        return $this->render('SocialProMainBundle:Reclamation:modifierReclamation.html.twig',array('form'=>$form->createView()));
    }
    public  function rechercherReclamationAction(Request $requette){
        $modele=new Reclamation();
        $em=$this->getDoctrine()->getEntityManager();
        $form=$this->createFormBuilder($modele)
            ->add('code')
            ->add('chercher',SubmitType::class)
            ->getForm();

        $form->handleRequest($requette);
        if($form->isValid()){
            $modele=$em->getRepository('SocialProMainBundle:Reclamation')->findBy(array('code'=>$modele->getCode()));
        }else{
            $modele=$em->getRepository('SocialProMainBundle:Reclamation')->findAll();
        }
        return $this->render('SocialProMainBundle:Reclamation:rechercheReclamation.html.twig',array('form'=>$form->createView(),'modele'=>$modele));
    }
}