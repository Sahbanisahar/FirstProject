<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $message = "Bonjour mes étudiants";
        
        // Vous pouvez utiliser la méthode render pour afficher un message simple
        return $this->render('home/index.html.twig', [
            'message' => $message,
        ]);
    }

    //@Route("/service/{name}", name="show_service")
    
   public function showService($name): Response
   {
       // Utilisez la variable $name dans votre logique ici
       $message = "Service : " . $name;

       return $this->render('home/service.html.twig', [
           'message' => $message,
       ]);
   }

   //@Route("/go-to-index", name="go_to_index")
     
    public function goToIndex(): RedirectResponse
    {
        // Utilisez la méthode redirectToRoute pour rediriger vers l'action "index"
        return $this->redirectToRoute('home');
    }
}
