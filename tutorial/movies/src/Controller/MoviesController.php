<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        // findAll() - SELECT * FROM movies;
        // $movies = $repository->findAll();

        // find() - SELECT * FROM movies WHERE id = 9;
        // $movies = $repository->find(9);

        // findBy() - SELECT * FROM movies ORDER BY id DESC;
        // $movies = $repository->findBy([], ['id' => 'DESC']);

        // findOneBy() - SELECT * FROM movies WHERE id = 6 AND title = 'The Dark Knight' ORDER BY id DESC
        // $movies = $repository->findOneBy(['id' => 9, 'title' => 'The Dark Knight'], ['id' => 'DESC']);
        // ^ both conditions in first array must be true if we want see a result
        // ^^ second array is optional - we could say how we want sort the data

        // count() - SELECT COUNT() FROM movies WHERE id = 9;
        // $movies = $repository->count(['id' => 9]);
        // ^ if we leave empty brackets [] in count method, we will get a result of all counted rows is database

        return $this->render('index3.html.twig');
    }
}
