<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SubscriptionController extends AbstractController
{
    #[Route('/subscription')]
    public function subscription(): Response
    {
        return $this->render(view: 'subscription/abonnements.html.twig');
    }
}