<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/hello/{prenom?World}", name="hello" )
     */
    public function hello(string $prenom): Response
    {
        return new Response("Hello $prenom");
    }
}