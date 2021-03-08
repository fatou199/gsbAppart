<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Form\EditerType;
use App\Entity\Recherche;
use App\Entity\Locataires;
use App\Form\RechercheType;
use App\Entity\Appartements;
use App\Entity\Proprietaires;
use App\Form\AppartementsType;
use Doctrine\ORM\EntityManager;
use App\Repository\ClientsRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AppartementsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AppartementsController extends AbstractController
{
    public function _construct(AppartementsRepository $repository, ObjectManager $em){

        $this->repository= $repository;
        $this->em=$em;
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        
        $appartements= $this->getDoctrine()->getRepository(Appartements:: class)->findAll();
        DUMP($appartements);
        return $this->render('appartements/index.html.twig', [
            'appartements' => $appartements,
        ]);
    }

    /**
     * @Route("/detail/{numappart}", name="detail_appartements")
     */
    public function detail()
    {
        $proprietaires= $this->getDoctrine()->getRepository(Proprietaires:: class)->findAll();

        return $this->render('appartements/detail.html.twig', [
            'proprietaires' => $proprietaires,
        ]);
    }

     /**
     * @Route("/loc", name="detailloc_appartements")
     */
    public function detailloc(Request $request, AppartementsRepository $repository)
    {
        
       
        $locataires= $this->getDoctrine()->getRepository(Locataires:: class)->findAll();
       
       
        
        return $this->render('appartements/detailloc.html.twig', [
            'locataires' => $locataires,
        ]);
    }

    /**
     * @Route("/add", name="add_appartements")
     */

    public function addappart(Request $request, EntityManagerInterface $manager){

        // on crée un appartement
        $appartements= new Appartements();

        // on récupère le formulaire
        $form= $this->createForm(AppartementsType::class,$appartements);
        $form->handleRequest($request);

        // si le formulaire a été soumis
        if($form->isSubmitted()){

        // on enregistre l'appart dans la BDD

        $manager= $this->getDoctrine()->getManager();
        $manager->persist($appartements);
        $manager->flush();

        return new Response('appartement ajouté');
        }

        // on génère le HTML du formulaire créé
        
        $formView= $form->createView();

        // on rend la vue
        return $this->render('appartements/appartadd.html.twig', array ('form'=>$formView));
    }

    
/**
     * @Route("/modif", name="modif_appartements")
     */

    public function modifappart(){
        
        $repository= $this->getDoctrine()->getRepository('App:Appartements');
        $appartements= $repository->findAll();

        // on rend la vue
        return $this->render('appartements/appartmodif.html.twig', array ('appartements'=>$appartements));
    }

   
/**
     * @Route("/modif/{numappart}", name="modif_appartements")
     */
    public function edit(Request $request, Appartements $appartements){

        // on récupère le formulaire
        $form= $this->createForm(AppartementsType::class,$appartements);
        $form->handleRequest($request);

        // si le formulaire a été soumis

        if($form->isSubmitted() && $form->isValid()){

        // on enregistre l'appart dans la BDD

        $manager= $this->getDoctrine()->getManager();
        // cela est inutile puisque l'objet provient dejà de la BDD
        //$manager->persist($appartements);
        $manager->flush();

        //$message=appartement modifié;
        return $this->redirectToRoute('admin');
        }

        // on génère le HTML du formulaire créé
        $formView= $form->createView();

        // on rend la vue
        return $this->render('appartements/appartmodif.html.twig', array ('form'=>$formView));
    }

    /**
     * @Route("/delete/{numappart}", name="delete_appartements")
     */

    public function delete(Appartements $appartements){

        $manager= $this->getDoctrine()->getManager();
        //** supprimer l'appartement */
        $manager->remove($appartements);
        $manager->flush();

        //** rediriger vers la route admin */
        return $this->redirectToRoute('admin');
    }

   

}
