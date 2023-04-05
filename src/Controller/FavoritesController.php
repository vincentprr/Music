<?php

namespace App\Controller;

use App\Repository\AlbumRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FavoritesController extends AbstractController{
    #[Route("/fav/{id}", name: "fav")]
    public function index(int $id, UserRepository $repo, AlbumRepository $albumRepository, Security $sec) : Response{
        if(($user = $sec->getUser()) && ($album = $albumRepository->find($id))){
            if($user->getFavorites()->contains($album))
                $user->removeFavorite($album);
            else
                $user->addFavorite($album);

            $repo->save($user, true);
        }

        return $this->redirectToRoute('index');
    }
}