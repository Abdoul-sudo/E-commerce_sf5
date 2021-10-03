<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController
{
    /**
    * @Route("/", name="index")
    */
    public function index(): void
    {
        dump('index'); //* dd('index) : dump and die
        die();

    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="127.0.0.1", schemes={"http", "https"})
     */
    public function test(Request $request, $age): Response //* le paramètre $age est age dans la route
    {
        /*
        !   bags et variables superglobales
        ?   ------------------------------
                request  $_POST
                query    $_GET
                server   $_SERVER
                files    $_FILES
                cookies  $_COOKIES
        */
        // // $request = Request::createFromGlobals();
        // // $age = $request->query->get('age', 0); // get age et met le à 0 par défaut

        return new Response("Vous avez $age ans");
        // // dd($request); // dump and die
    }
}