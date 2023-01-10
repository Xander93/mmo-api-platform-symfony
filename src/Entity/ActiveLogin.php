<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class ActiveLogin
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    public int $userId;

    #[ORM\Column]
    public string $sessionKey;

    #[ORM\Column]
    public ?int $characterId;
}