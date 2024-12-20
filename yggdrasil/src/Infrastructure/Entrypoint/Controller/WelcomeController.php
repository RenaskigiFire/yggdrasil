<?php
namespace App\Infrastructure\Entrypoint\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController
{
    #[Route('/')]
    public function welcome(Request $request): Response
    {
        return new Response("Hola mundo");
    }
}