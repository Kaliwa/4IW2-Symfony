<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    #[Route('/movie-details', name: 'movie_details')]
    public function detail(): Response
    {
        return $this->render(view: 'movie/detail.html.twig');
    }

    #[Route('/serie-details', name: 'serie_details')]
    public function serie(): Response
    {
        return $this->render(view: 'movie/detail_serie.html.twig');
    }
}
