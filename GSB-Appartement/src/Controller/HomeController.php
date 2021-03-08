<?php

namespace App\Controller;

use App\Entity\Clients;
use App\Form\EditerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
    * @Route("/", name="home")
    */
    public function home(){
        return $this->render('home/home.html.twig'); //** rendu de la vue */
       }

    /**
     * @Route("/info", name="info")
     */
    public function info()
    {
        $clients= $this->getUser(); /** recuperation des données de l'utilisateur */

        return $this->render('home/info.html.twig', [
            'clients' => $clients,
        ]);
    }


      /**
     * @Route("/ameliorer/{numero}", name="editer_utilisateur")
     */
    public function editerutilisateur(Clients $clients, Request $request)
    {
        $form = $this->createForm(EditerType::class, $clients);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($clients);
            $entityManager->flush();

        }
        
        return $this->render('home/editer.html.twig', [
            'form' => $form->createView(),
        ]);
    }
 }




