<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    private const MINIMUM_PASSWORD_LENGTH = 4;

    #[Route('/register', name: 'register')]
    public function index(Request $request, UserRepository $repo, UserPasswordHasherInterface $hasher): Response
    {
        $error = "";
        $form = $this->createForm(RegisterType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $email = $form->get("email")->getData();
            if(!$repo->findBy(["email" => $email])){
                $password = $form->get("password")->getData();
                if(strlen($password) >= self::MINIMUM_PASSWORD_LENGTH){
                    $user = new User();
                    $user->setEmail($email);
                    $user->setPassword($hasher->hashPassword($user, $password));

                    $repo->save($user, true);
                }
                else
                    $error = "Votre mot de passe doit contenir minimum ". self::MINIMUM_PASSWORD_LENGTH ." caractères...";
            }
            else
                $error = "Un utilisateur utilise déjà cet email...";
        }

        return $this->render('register.html.twig', [
            'controller_name' => 'RegisterController',
            'title' => 'Register',
            'form' => $form->createView(),
            'error' => $error
        ]);
    }
}
