<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(): Response
    {
        $presentation = 'NovaTech est une entreprise innovante spécialisée dans les solutions technologiques modernes. Fondée en 2020, nous accompagnons nos clients dans leur transformation digitale.';
        $anneeCourante = date('Y');
        
        return $this->render('about/index.html.twig', [
            'presentation' => $presentation,
            'anneeCourante' => $anneeCourante,
        ]);
    }
}



