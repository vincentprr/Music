<?php

namespace App\Controller;

use App\Repository\AlbumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController{
    #[Route("/", name: "index")]
    public function index(AlbumRepository $repo) : Response{
        return $this->render("index.html.twig", [
            "title" => "Home",
            "albums" => $repo->findAll()
        ]);
    }
}