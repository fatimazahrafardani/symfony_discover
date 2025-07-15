<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/product/{slug}-{id}', name: 'app_product', requirements: ['id' => '\d+', 'slug' => '[a-z0-9]+'])]



    public function index(string $slug, int $id): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'slug' => $slug,
            'demo' => '<h1>product</h1>',
            'persone'=>[
                'name'=>'fati zin',
                'age'=>'20'
            ]
        ]);
    }
}
