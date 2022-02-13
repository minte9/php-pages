<?php

/**
 * ProductController
 * 
 * Save products in DB.
 * 
 * http://localhost:8000/product        # New product saved, id: 1
 * http://localhost:8000/product        # New product saved, id: 2
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'create_product')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $product = new Product();
        $product->setName('Desk');
        $product->setPrice(500);
        $product->setDescription('Ergonomic');

        $entityManager->persist($product); // no queries yet
        $entityManager->flush(); // queries executed

        return new Response('New product saved, id: ' . $product->getId());
    }
}
