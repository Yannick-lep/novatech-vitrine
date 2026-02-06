<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ServiceRepository;


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

    #[Route('/service', name: 'app_services')]
    public function services(serviceRepository $serviceRepository): Response
    {
        $services = $serviceRepository->findBy(
            ['createAt' =>'DESC']
        );
        return $this->render('home/services.html.twig', [
            'services' => $services,
        ]);
    }
}
