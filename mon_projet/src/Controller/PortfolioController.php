<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PortfolioController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('cv/index.html.twig');
    }

#[Route('/loisirs', name: 'loisirs')]
public function loisirs(): Response
{
    $loisirs = [
        [
            'image' => 'fitness.jpg',
            'titre' => 'Fitness & Musculation',
            'description' => 'Entraînements réguliers en salle de sport'
        ],
        [
            'image' => 'gaming.jpg',
            'titre' => 'Gaming & Développement',
            'description' => 'Programmation de jeu vidéo et développement de scripts'
        ],
        [
            'image' => 'montage-pc.jpg',
            'titre' => 'Lecture en anglais',
            'description' => 'Lecture et traduction de livres en anglais'
        ],
        [
            'image' => 'natation.jpg',
            'titre' => 'Natation',
            'description' => 'Pratique régulière pour la condition physique'
        ],
        [
            'image' => 'virtualisation.jpg',
            'titre' => 'Virtualisation & Réseaux',
            'description' => 'Configuration de VMs et réseaux virtuels'
        ],
        [
            'image' => 'veille-techno.jpg',
            'titre' => 'Veille Technologique',
            'description' => 'Suivi des nouvelles technologies et tendances IT'
        ]
    ];

    return $this->render('loisirs/index.html.twig', [
        'loisirs' => $loisirs
    ]);
}


    #[Route('/competences/rt1', name: 'competences_rt1')]
    public function rt1(): Response
    {
        $competence = [
            'titre' => ' - Administrer les réseaux et l\'Internet',
            'apprentissages' => [
                ['code' => 'AC11.01', 'titre' => 'Électricité et télécommunications',  'details' => 'Lois d\'Ohm, mesures, circuits électriques'],
                ['code' => 'AC11.02', 'titre' => 'Architecture systèmes numériques', 'details' => 'Codage binaire, protocoles, architecture réseau'],
                ['code' => 'AC11.03', 'titre' => 'Configuration réseau local',  'details' => 'Switchs, VLANs, routage, sécurité'],
                ['code' => 'AC11.04', 'titre' => 'Systèmes d\'exploitation',  'details' => 'Linux, Windows Server, Bash, PowerShell'],
                ['code' => 'AC11.05', 'titre' => 'Dysfonctionnements réseau', 'details' => 'Diagnostic, ping, traceroute, Wireshark'],
                ['code' => 'AC11.06', 'titre' => 'Installation poste client', 'details' => 'Déploiement OS, configuration réseau, documentation']
            ]
        ];
        return $this->render('competences/rt.html.twig', ['competence' => $competence]);
    }

    #[Route('/competences/rt2', name: 'competences_rt2')]
    public function rt2(): Response
    {
        $competence = [
            'titre' => ' - Connecter les entreprises et les usagers',
            'apprentissages' => [
                ['code' => 'AC12.01', 'titre' => 'Mesure et analyse des signaux',  'details' => 'Oscilloscope, analyseur de spectre, mesures'],
                ['code' => 'AC12.02', 'titre' => 'Systèmes de transmissions',  'details' => 'Modulation, bande passante, théorie du signal'],
                ['code' => 'AC12.03', 'titre' => 'Supports de transmission',  'details' => 'Câblage RJ45, fibre optique, normes'],
                ['code' => 'AC12.04', 'titre' => 'Systèmes ToIP',  'details' => ''],
                ['code' => 'AC12.05', 'titre' => 'Communication professionnelle',  'details' => 'Rédaction, présentation, adaptation discours']
            ]
        ];
        return $this->render('competences/rt.html.twig', ['competence' => $competence]);
    }

    #[Route('/competences/rt3', name: 'competences_rt3')]
    public function rt3(): Response
    {
        $competence = [
            'titre' => ' - Créer des outils et applications informatiques',
            'apprentissages' => [
                ['code' => 'AC13.01', 'titre' => 'Systèmes informatiques et outils',  'details' => 'IDE, Git, Terminal, Debugging'],
                ['code' => 'AC13.02', 'titre' => 'Programmation et débogage', 'details' => 'Python, C, PHP, lecture/correction de code'],
                ['code' => 'AC13.03', 'titre' => 'Algorithmes',  'details' => 'Structures de données, tri, recherche, optimisation'],
                ['code' => 'AC13.04', 'titre' => 'Architecture site Web', 'details' => 'HTML/CSS, PHP, Symfony, ce portfolio'],
                ['code' => 'AC13.05', 'titre' => 'Gestion de données',  'details' => 'SQL'],
                ['code' => 'AC13.06', 'titre' => 'Environnement collaboratif', 'details' => 'Git, GitHub, travail en équipe']
            ]
        ];
        return $this->render('competences/rt.html.twig', ['competence' => $competence]);
    }
}
