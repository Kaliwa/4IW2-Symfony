<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
    #[Route('/login', name: 'auth_login')]
    public function login(): Response
    {
        return $this->render(view: 'auth/login.html.twig');
    }

    #[Route('/register', name: 'auth_register')]
    public function register(): Response
    {
        return $this->render(view: 'auth/register.html.twig');
    }

    #[Route('/forgot', name: 'auth_forgot')]
    public function forgot(): Response
    {
        return $this->render(view: 'auth/forgot.html.twig');
    }

    #[Route('/reset', name: 'auth_reset')]
    public function reset(): Response
    {
        return $this->render(view: 'auth/reset.html.twig');
    }

    #[Route('/confirm', name: 'auth_confirm')]
    public function confirm(): Response
    {
        return $this->render(view: 'auth/confirm.html.twig');
    }
}
