<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use    Symfony\Component\HttpFoundation\Request;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    #[Route('/{max}', name: 'app_lucky_number')]



    public function index(): Response
    {
        //    dd($request->attributes->get('id'));
        // dd($id);
        //  return new Response('tst:' . $id) ;
        // return new JsonResponse([
        //     'message' => $id
        // ]);
        return $this->render(
            'home/index.html.twig',

        );
    }

    public function number(int $max): Response
    {
        $number = random_int(0, $max);

        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }
}
