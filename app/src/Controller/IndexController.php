<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    #[Route('/{slug}', name: 'app_slug')]
    public function index(String $slug = "home"): Response
    {
        return $this->render('index/index.html.twig', [
            'slug' => "app_".$slug
        ]);
    }
}
