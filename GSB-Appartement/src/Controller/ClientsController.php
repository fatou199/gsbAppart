<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Form\ClientsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientsController extends AbstractController
{
    /**
     * @Route("/clients", name="clients")
     */
    public function index()
    {
        $clients= $this->getDoctrine()->getRepository(Clients:: class)->findAll();
        DUMP($clients);
        return $this->render('clients/index.html.twig', [
            'clients' => $clients,
        ]);
    }

    /**
     * @Route("/ajout", name="add_clients")
     */
    public function ajoutclient(Request $request, EntityManagerInterface $manager) /** permet d'enregistrer l'utilisateur dans la BDD requête http */
    {
        $clients = new clients();
        
        $form = $this->createForm(ClientsType::class, $clients); /** recuperation du formulaire */

        $form->handleRequest($request); /** regarde si le formulaire a été soumis */

         if($form->isSubmitted()&& $form->isValid()){ /** enregistre le produit dans la BDD */
            $manager= $this->getDoctrine()->getManager();
            $manager->persist($clients); /** Cette méthode signale à Doctrine qu'il faut garder l'entité en mémoire */
            $manager->flush(); /**Enregistre toutes les entités qui t'ont été données dans le flush*/
         return new Response('client ajouté');
        }

        $formView= $form->createView(); /** genere le HTML en formulaire crée */
        return $this->render('clients/ajoutcli.html.twig', array ('form'=>$formView));
    }

    /**
     * @Route("/editer", name="modif_clients")
     */

    public function editclient(){
        
        $repository= $this->getDoctrine()->getRepository('App:Clients');
        $clients= $repository->findAll();


        return $this->render('clients/cliedit.html.twig', array ('clients'=>$clients));
    }

   
/**
     * @Route("/editer/{numero}", name="modif_clients")
     */
    public function edit(Request $request, clients $Clients){

        // on récupère le formulaire

        
        

        $form= $this->createForm(ClientsType::class,$Clients);

        $form->handleRequest($request);

        // si le formulaire a été soumis
        if($form->isSubmitted() && $form->isValid()){

        // on enregistre l'appart dans la BDD
        $manager= $this->getDoctrine()->getManager();
        // cela est inutile puisque l'objet provient dejà de la BDD
        //$manager->persist($clients);
        $manager->flush();

        return $this->redirectToRoute('clients');
        }

        // on génère le HTML du formulaire créé
        $formView= $form->createView();

        // on rend la vue
        return $this->render('clients/cliedit.html.twig', array ('form'=>$formView));
    }

    /**
     * @Route("/supprimer/{numero}", name="delete_clients")
     */

    public function delete(clients $clients){

        $manager= $this->getDoctrine()->getManager();
        $manager->remove($clients); //** suppression d'un appartement */
        $manager->flush();

        
        return $this->redirectToRoute('clients'); //** redirige vers cette route */
    }
}
