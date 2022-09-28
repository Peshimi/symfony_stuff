<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movies = ["Avengers", "Inception", "Loki", "Black Widow"];
        
        return $this->render('index2.html.twig', array(
            'movies' => $movies
        ));

        //return $this->render('index.html.twig', [
            //'title' => 'Avengers: Endgame',
            //'episode' => 2
        //]);
    }
}
