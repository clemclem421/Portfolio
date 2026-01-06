<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetencesController extends AbstractController
{
    #[Route('/competences/reseau', name: 'comp_reseau')]
    public function reseau(): Response
    {
        return $this->render('competences/reseau.html.twig');
    }

    #[Route('/competences/sysadmin', name: 'comp_sysadmin')]
    public function sysadmin(): Response
    {
        return $this->render('competences/sysadmin.html.twig');
    }

    #[Route('/competences/dev', name: 'comp_dev')]
    public function dev(): Response
    {
        return $this->render('competences/dev.html.twig');
    }
}
