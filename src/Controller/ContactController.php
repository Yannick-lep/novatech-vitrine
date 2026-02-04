<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        $email = 'contact@novatech.fr';
        $telephone = '01 23 45 67 89';
        $adresse = '42 Avenue de l\'Innovation, 75001 Paris';
        
        return $this->render('contact/index.html.twig', [
            'email' => $email,
            'telephone' => $telephone,
            'adresse' => $adresse,
        ]);
    }
}


