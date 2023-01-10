<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class User
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    public int $id;

    #[ORM\Column]
    public string $username;

    #[ORM\Column]
    public string $password;

    #[ORM\Column]
    public string $email;

    #[ORM\Column]
    public ?int $role;
}
