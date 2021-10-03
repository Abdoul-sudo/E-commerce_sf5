<?php

namespace App\Controller;

use App\Taxes\Detector;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/hello/{prenom?World}", name="hello" )
     */
    public function hello(string $prenom, Detector $detector): Response
    {
        dump($detector->detect(101));
        dump($detector->detect(10));
        return new Response("Hello $prenom");
    }
}