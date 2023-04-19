<?php

namespace App\Controller;

use App\Entity\PRODUCTO;
use App\Entity\PROVEEDOR;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
<<<<<<< HEAD

    #[Route('/insert/producto', name: 'insert_producto')]
    public function insert() {
        $producto = new PRODUCTO('Dolex gripa',36,1500,350,800,0,'Frasco');
        $proveedor = $this->en->getRepository(PROVEEDOR::class)->find(233);
        $producto->setProvCode($proveedor);
        $this->en->persist($producto);
        $this->en->flush();
        return new JsonResponse(['succes' => true]);
        
=======
    #[Route('/update/producto/{id}', name: 'app_producto')]
    public function updateProducto($id): Response
    {
        $producto = $this->en->getRepository(PRODUCTO::class)->find(id:$id);
        $producto->setPrdNombre('Dolex');
        $this->en->flush();
        return new JsonResponse(['success' => true]);
    }
    #[Route('/remove/producto/{id}', name: 'app_producto')]
    public function removeProducto($id): Response
    {
        $producto = $this->en->getRepository(PRODUCTO::class)->find(id:$id);
        $this->en->remove($producto);
        $this->en->flush();
        return new JsonResponse(['success' => true]);
>>>>>>> 937d6b9bb2525c716d8828f18aede3c6436a7999
    }
}
