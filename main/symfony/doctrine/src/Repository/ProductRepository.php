<?php

/**
 * ProductRepository
 * 
 * src/Repository/ProductRepository.php
 * 
 * You can think of a repository as a PHP class whose only job ...
 * is to help you fetch entities of a certain class.
 * 
 * Once you have a repository object, you have many helper methods.
 */

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
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
