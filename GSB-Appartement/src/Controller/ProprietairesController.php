<?php

namespace App\Controller;

use App\Entity\Proprietaires;
use App\Form\ProprietairesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProprietairesController extends AbstractController
{

    /**
     * @Route("/proprietaires", name="proprietaires")
     */
    public function index()
    {
        $proprietaires= $this->getDoctrine()->getRepository(Proprietaires:: class)->findAll();
        DUMP($proprietaires);
        return $this->render('proprietaires/index.html.twig', [
            'proprietaires' => $proprietaires,
        ]);
    }


    /**
     * @Route("/ajt", name="add_proprietaires")
     */
        public function addproprio(Request $request, EntityManagerInterface $manager) /** permet d'enregistrer l'utilisateur dans la BDD requête http */
    {
        $proprietaires = new Proprietaires();
        
        $form = $this->createForm(ProprietairesType::class, $proprietaires); /** recuperation du formulaire */

        $form->handleRequest($request); /** regarde si le formulaire a été soumis */

         if($form->isSubmitted()&& $form->isValid()){ /** enregistre le produit dans la BDD */
            $manager= $this->getDoctrine()->getManager();
            $manager->persist($proprietaires); /** Cette méthode signale à Doctrine qu'il faut garder l'entité en mémoire */
            $manager->flush(); /**Enregistre toutes les entités qui t'ont été données dans le flush*/
         return new Response('proprietaires ajouté');
        }

        $formView= $form->createView(); /** genere le HTML en formulaire crée */
        return $this->render('proprietaires/proprioadd.html.twig', array ('form'=>$formView));
    }

    /**
     * @Route("/modifier", name="modif_proprietaires")
     */

    public function modifproprio(){
        
        $repository= $this->getDoctrine()->getRepository('App:Proprietaires');
        $proprietaires= $repository->findAll();


        return $this->render('proprietaires/propriomodif.html.twig', array ('proprietaires'=>$proprietaires));
    }

   
/**
     * @Route("/modifier/{numero}", name="modif_proprietaires")
     */
    public function edit(Request $request, Proprietaires $proprietaires){

        // on récupère le formulaire

        $form= $this->createForm(ProprietairesType::class,$proprietaires);

        $form->handleRequest($request);

        // si le formulaire a été soumis
        if($form->isSubmitted() && $form->isValid()){

        // on enregistre le proprio dans la BDD
        $manager= $this->getDoctrine()->getManager();
        // cela est inutile puisque l'objet provient dejà de la BDD
        //$manager->persist($proprietaires);
        $manager->flush();

        return $this->redirectToRoute('proprietaires');
        }

        // on génère le HTML du formulaire créé
        $formView= $form->createView();

        // on rend la vue
        return $this->render('proprietaires/propriomodif.html.twig', array ('form'=>$formView));
    }

    /**
     * @Route("/suppr/{numero}", name="delete_proprietaires")
     */

    public function delete(Proprietaires $proprietaires){

        $manager= $this->getDoctrine()->getManager();
        $manager->remove($proprietaires); //** suppression d'un proprio */
        $manager->flush();

        
        return $this->redirectToRoute('proprietaires'); //** redirige vers cette route */
    }


}
