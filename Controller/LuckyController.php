<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LuckyController extends AbstractController
{
   /**
     * @Route("/lucky/numberr" , name="index")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route("/lucky/number/{id}", name="app_lucky_number")
     */
    public function parametre($id=null): Response
    {
        //$number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$id.'</body></html>'
        );
    }

     /**
     * @Route("/home/{text}" , name="home")
     */
    public function home($text): Response
    {
       

        return $this->render('home/index.html.twig', [
            "text"=> $text,
            
        ]);
    }
    

}








?>