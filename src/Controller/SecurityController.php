<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/api/current_user', name: 'app_security', methods: ['GET'])]
    public function index(): Response
    {
        return $this->json($this->getUser());
    }
}