<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies/{name}', name: 'app_movies', defaults:['name' => null], methods:['GET', 'HEAD'])]
    // if we remove 'defaults', there will be an exception *No route found for..* because we declered
    // that we put any name in the endpoint
    public function index($name): JsonResponse
    {
        return $this->json([
            'message' => $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
