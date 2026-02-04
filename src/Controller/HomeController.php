<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $nomEntreprise = 'NovaTech';
        $slogan = 'Votre partenaire technologique de confiance';
        $messageBienvenue = 'Bienvenue chez NovaTech, experts en solutions numériques innovantes.';
        
        return $this->render('home/index.html.twig', [
            'nomEntreprise' => $nomEntreprise,
            'slogan' => $slogan,
            'messageBienvenue' => $messageBienvenue,
        ]);
    }
}
