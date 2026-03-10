<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    #[Route('/prestation', name: 'app_prestation')]
    public function prestation(): Response
    {
        return $this->render('prestations/prestation.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    #[Route('/activite', name: 'app_activite')]
    public function activite(): Response
    {
        return $this->render('activite/activite.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    // #[Route('/', name: 'app_coming')]
    // public function coming(): Response
    // {
    //     return $this->render('index/coming.html.twig', [
    //         'controller_name' => 'IndexController',
    //     ]);
    // }
}
