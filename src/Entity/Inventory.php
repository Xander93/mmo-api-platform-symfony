<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class Inventory
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    public int $id;

    #[ORM\Column]
    public int $characterId;

    #[ORM\Column]
    public int $slot;

    #[ORM\Column]
    public string $item;

    #[ORM\Column]
    public int $amount;
}
