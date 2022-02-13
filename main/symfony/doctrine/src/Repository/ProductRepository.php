<?php

/**
 * ProductRepository
 * 
 * src/Repository/ProductRepository.php
 * 
 * You can think of a repository as a PHP class whose only job ...
 * is to help you fetch entities of a certain class.
 */

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findAllGreaterThanId(int $id): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "
            SELECT * FROM product p 
            WHERE p.id > :id
            ORDER BY p.id DESC
        ";
        $stmt = $conn->prepare($sql);
        $rs = $stmt->executeQuery(['id' => $id]);

        return $rs->fetchAllAssociative();
    }
}
