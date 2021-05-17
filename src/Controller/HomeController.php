<?php

namespace App\Controller;

use App\Repository\CompetenceRepository;
use App\Repository\FormationRepository;
use App\Repository\ProjetRepository;
use App\Repository\DocumentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(DocumentRepository $documentRepository,CompetenceRepository $competenceRepository, FormationRepository $formationRepository, ProjetRepository $projetRepository): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'HomeController',
            'competences' => $competenceRepository->findAll(),
            'formations' => $formationRepository->findAll(),
            'projets' => $projetRepository->findAll(),
            'documents' => $documentRepository->findAll(),
        ]);
    }
}
