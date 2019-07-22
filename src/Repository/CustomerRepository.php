<?php

namespace App\Repository;

use App\Repository\CustomerRepositoryInterface;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\CustomerRepository as BaseCustomerRepository;

class CustomerRepository extends BaseCustomerRepository implements CustomerRepositoryInterface
{
    public function getAllAgeDefined(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.age IS NOT NULL')
            ->getQuery()
            ->getResult()
            ;
    }
}
