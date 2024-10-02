<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UploadController extends AbstractController
{
    #[Route(path: '/upload', name: 'upload_index')]
    public function upload(): Response
    {
        return $this->render(view: 'upload/upload.html.twig');
    }
}