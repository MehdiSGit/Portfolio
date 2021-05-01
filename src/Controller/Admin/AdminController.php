<?php

namespace App\Controller\Admin;

use App\Repository\CompetenceRepository;
use App\Repository\FormationRepository;
use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin')]
    public function index(CompetenceRepository $competenceRepository, FormationRepository $formationRepository, ProjetRepository $projetRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'competences' => $competenceRepository->findAll(),
            'formations' => $formationRepository->findAll(),
            'projets' => $projetRepository->findAll(),
        ]);
    }
}
