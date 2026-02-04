<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServicesController extends AbstractController
{
    #[Route('/services', name: 'app_services')]
    public function index(): Response
    {
        $services = [
            'Développement web',
            'Conseil technique',
            'Audit de code',
            'Maintenance applicative',
        ];
        
        return $this->render('services/index.html.twig', [
            'services' => $services,
        ]);
    }
}


