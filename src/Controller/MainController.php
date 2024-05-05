<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', []);
    }
    
    #[Route('/qui-sommes-nous', name: 'about')]
    public function about(): Response
    {
        return $this->render('main/about.html.twig', []);
    }

    #[Route('/formations', name: 'formations')]
    public function formations(): Response
    {
        return $this->render('main/formations.html.twig', []);
    }

    #[Route('/club-informatique', name: 'club')]
    public function club(): Response
    {
        return $this->render('main/club.html.twig', []);
    }

    #[Route('/joindre', name: 'joindre')]
    public function joindre(): Response
    {
        return $this->render('main/joindre.html.twig', []);
    }
}
