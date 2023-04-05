<?php

namespace App\Controller;

use App\Repository\AlbumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlbumDetailsController extends AbstractController
{
    #[Route("/album/{id}", name: "album")]
    public function index(int $id, AlbumRepository $repo) : Response{
        $album = $repo->find($id);

        if(!$album)
            return $this->redirectToRoute("index");

        return $this->render("detail.html.twig", [
            "title" => "Album",
            "album" => $album
        ]);
    }
}