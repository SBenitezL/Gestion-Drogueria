<?php

namespace App\Controller;

use App\Entity\PRODUCTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController
{
    #[Route('/producto/{id}', name: 'app_producto')]
    public function index(PRODUCTO $pRODUCTO): Response
    {
        dump($pRODUCTO);
        return $this->render('producto/index.html.twig', [
            'controller_name' => 'ProductoController',
        ]);
    }
}
