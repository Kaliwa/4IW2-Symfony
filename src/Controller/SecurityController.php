<?php

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'auth_login')]
    public function login(
        AuthenticationUtils $authenticationUtils
    ): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
    #[Route(path: '/logout', name: 'auth_logout')]
    public function logout(): void
    {
        throw new \LogicException('Good bye !');
    }
}
