<?php

namespace SocialPro\MainBundle\Controller;

use SocialPro\MainBundle\Entity\Evenement;
use SocialPro\MainBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class EvenementController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function ajouterEvenementAction(Request $la_requetteEspoir){

        $modele=new  Evenement();

       // $user = $this->get('security.context')->getToken()->getUser();

        $form = $this->createForm(EvenementType::class,$modele);
        $form->handleRequest($la_requetteEspoir);
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
           // $model->setUser($user);
            $em->persist($modele);
            $em->flush();
            return $this->redirectToRoute('afficher_Evenement');
        }
        return $this->render('SocialProMainBundle:Evenement:ajoutEvenement.html.twig',array('form'=>$form->createView()));


    }


    public  function afficherEvenementAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $modele=$em->getRepository('SocialProMainBundle:Evenement')->findAll();
        return $this->render('SocialProMainBundle:Evenement:afficherEvenement.html.twig',array('modele'=>$modele));
    }

    public function  supprimerEvenementAction($id){
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository('SocialProMainBundle:Evenement')->find($id);

        $em->remove($modele);
        $em->flush();

        return $this->redirectToRoute('afficher_Evenement');
    }
    public  function  modifierEvenementAction(Request $requette,$id){
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository('SocialProMainBundle:Evenement')->find($id);

        $form=$this->createForm(EvenementType::class,$modele);
        $form->handleRequest($requette);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($modele);
            $em->flush();

            return $this->redirectToRoute('modifier_Evenement');
        }
        return $this->render('SocialProMainBundle:Formation:modifierFormation.html.twig',array('form'=>$form->createView()));
    }
    public  function rechercherEvenementAction(Request $requette){
        $modele=new Evenement();
        $em=$this->getDoctrine()->getEntityManager();
        $form=$this->createFormBuilder($modele)
            ->add('nom')
            ->add('chercher',SubmitType::class)
            ->getForm();

        $form->handleRequest($requette);
        if($form->isValid()){
            $modele=$em->getRepository('SocialProMainBundle:Evenement')->findBy(array('nom'=>$modele->getNom()));
        }else{
            $modele=$em->getRepository('SocialProMainBundle:Evenement')->findAll();
        }
        return $this->render('SocialProMainBundle:Evenement:rechercherEvenement.html.twig',array('form'=>$form->createView(),'modele'=>$modele));
    }



}
