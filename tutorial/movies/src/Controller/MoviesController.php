<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(MovieRepository $movieRepository): Response
    {
        //this array is static, now we will use here the entity
        //$movies = ["Avengers", "Inception", "Loki", "Black Widow"];
        //return $this->render('index2.html.twig', array(
        //    'movies' => $movies
        //));
        
        $movies = $movieRepository->findAll();

        dd($movies);

        return $this->render('index2.html.twig');
    }
}
