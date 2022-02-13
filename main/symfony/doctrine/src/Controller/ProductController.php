<?php

/**
 * ProductController
 * 
 * Save products in DB.
 * 
 * Whether you're creating or updating objects ...
 * Doctrine is smart enough to know if it should INSERT or UPDATE
 * 
 * http://localhost:8000/product        # New product saved, id: 1
 * http://localhost:8000/product        # New product saved, id: 2
 * http://localhost:8000/fetch_one      # Product id 2, name: Desk
 * http://localhost:8000/fetch_sql      # Last from list (id > 3): 7
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

    #[Route('/fetch_one')]
    public function fetch_one(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Product::class);
        $one = $repository->findOneBy(['id' => 2]);

        return new Response(
            'Product id 2, name: ' . $one->getName());
    }

    #[Route('/fetch_sql')]
    public function fetch_sql(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Product::class);
        $data = $repository->findAllGreaterThanId(3);
        $last = $data[0];

        return new Response(
            'Last from list (id > 3): ' . $last['id']);
    }
}
