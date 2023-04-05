<?php

namespace App\Controller;

use App\Entity\Album;
use App\Form\AddAlbumType;
use App\Repository\AlbumRepository;
use App\Repository\ArtistRepository;
use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddingController extends AbstractController{
    #[Route("/add/album/", name: "addAlbum")]
    #[Route("/add/album/{id}", name: "editAlbum")]
    public function index(?int $id, Request $req, AlbumRepository $repo, ArtistRepository $artistRepository,
        GenreRepository $genreRepository, Security $sec) : Response
    {
        if(!$sec->getUser())
            return $this->redirectToRoute('index');

        $album = $id ? $repo->find($id) : new Album();
        $error = "";
        $form = $this->createForm(AddAlbumType::class);
        $form->handleRequest($req);

        if($form->isSubmitted() && $form->isValid()){
            if(($year = $form->get('releaseYear')->getData()) > 0){
                if(($author = $artistRepository->find($req->request->get('author')))){
                    $album->setAuthor($author);
                    $album->setImage($form->get('image')->getData());
                    $album->setReleaseYear($year);
                    $album->setTitle($form->get('title')->getData());

                    foreach($req->request->all('genres') as $genre)
                        if(($g = $genreRepository->find($genre)))
                            $album->addGenre($g);
                    
                    $repo->save($album, true);

                    return $this->redirectToRoute("index");
                }
                else
                    $error = "L'artiste sélectionné n'existe pas...";
            }
            else
                $error = "Veuillez sélectionner une année valide...";
        }

        return $this->render("addAlbum.html.twig", [
            "title" => "Ajouter un album",
            "form" => $form->createView(),
            "artists" => $artistRepository->findAll(),
            "genres" => $genreRepository->findAll(),
            "album" => $album,
            "error" => $error
        ]);
    }

    #[Route("/delete/album/{id}", name: "delAlbum")]
    public function delete(int $id, AlbumRepository $repo, Security $sec) : Response
    {
        if($sec->getUser() && ($album = $repo->find($id)))
            $repo->remove($album, true);

        return $this->redirectToRoute('index');
    }
}