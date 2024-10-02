<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
    #[Route('/login')]
    public function login(): Response
    {
        return $this->render(view: 'auth/login.html.twig');
    }
    #[Route('/register')]
    public function register(): Response
    {
        return $this->render(view: 'auth/register.html.twig');
    }

    #[Route('/forgot')]
    public function forgot(): Response
    {
        return $this->render(view: 'auth/forgot.html.twig');
    }
    #[Route('/reset')]
    public function reset(): Response
    {
        return $this->render(view: 'auth/reset.html.twig');
    }
    #[Route('/confirm')]
    public function confirm(): Response
    {
        return $this->render(view: 'auth/confirm.html.twig');
    }
}