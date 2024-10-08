<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route(path: '/admin', name: 'admin_dashboard')]
    public function admin(): Response
    {
        return $this->render(view: 'admin/admin.html.twig');
    }

    #[Route('/admin-films', name: 'admin_films')]
    public function films(): Response
    {
        return $this->render(view: 'admin/admin_films.html.twig');
    }

    #[Route('/admin-users', name: 'admin_users')]
    public function users(): Response
    {
        return $this->render(view: 'admin/admin_users.html.twig');
    }

    #[Route('/admin-add-films', name: 'admin_add_films')]
    public function addFilms(): Response
    {
        return $this->render(view: 'admin/admin_add_films.html.twig');
    }
}
