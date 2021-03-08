<?php

namespace App\Controller;

use App\Form\RechercheType;
use App\Entity\Appartements;
use App\Repository\AppartementsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RechercheController extends AbstractController
{
    /**
     * @Route("/recherche", name="recherche")
     */
    public function recherche(Request $request, AppartementsRepository $repository)
    {
        $recherche = new Appartements();
        $appartements= $this->getDoctrine()->getRepository(Appartements:: class)->findAll();
        $rechercheForm = $this->createForm(RechercheType::class, $recherche);
        dump($rechercheForm);

        $rechercheForm->handleRequest($request);
        if($rechercheForm->isSubmitted() && $rechercheForm->isValid()){ 
    
            $appartements = $repository->recherche_appart($recherche);
        }
        $formView= $rechercheForm->createView();
        return $this->render('recherche/recherche.html.twig', ['appartements' => $appartements, 'rechercheForm' => $formView]);
        
    }
}
