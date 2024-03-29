<?php

// src/Controller/DefaultController.php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;


Class DefaultController extends AbstractController

{

    /**

     * @Route("/", name="app_index")

     */

    public function index(): Response

    {
    
        return $this->render('default/index.html.twig', [
    
           'bienvenue' => 'Netflix mais en mieux',
    
        ]);
    
    }

}