<?php

namespace App\Controller;

use App\Entity\PRODUCTO;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController
{
    private $en;
    /**
     * @param $en
     */
    public function __construct(EntityManagerInterface $en)
    {
        $this->en = $en;
    }

    #[Route('/producto/{id}', name: 'app_producto')]
    public function index($id): Response
    {
        $producto = $this->en->getRepository(PRODUCTO::class)->find($id);
        $custome_prd = $this->en->getRepository(PRODUCTO::class)->findProducto(id:$id);
        return $this->render('producto/index.html.twig', [
            'producto' => $producto,
            'custome_prd' => $custome_prd
        ]);
    }
}
