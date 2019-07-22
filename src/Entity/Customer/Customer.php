<?php

declare(strict_types=1);

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Core\Model\Customer as BaseCustomer;

/**
 * @Entity
 * @Table(name="sylius_customer")
 */
class Customer extends BaseCustomer
{
    /** @ORM\Column(type="integer", nullable=true) */
    private $age;

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}
