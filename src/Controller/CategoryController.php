<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoryController extends AbstractController
{
    #[Route(path: '/category')]
    public function category(): Response
    {
        return $this->render(view: 'categories/category.html.twig');
    }
    #[Route(path: '/discover')]
    public function discover(): Response
    {
        return $this->render(view: 'categories/discover.html.twig');
    }
}