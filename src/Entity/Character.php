<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class Character
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    public int $id;

    #[ORM\Column]
    public int $userId;

    #[ORM\Column]
    public string $name;

    #[ORM\Column]
    public int $class;

    #[ORM\Column]
    public int $gender;

    #[ORM\Column]
    public int $health;

    #[ORM\Column]
    public int $mana;

    #[ORM\Column]
    public int $level;

    #[ORM\Column]
    public int $experience;

    #[ORM\Column]
    public int $clan;

    #[ORM\Column]
    public ?int $posx;

    #[ORM\Column]
    public ?int $posy;

    #[ORM\Column]
    public ?int $posz;

    #[ORM\Column]
    public float $rotationYaw;

    #[ORM\Column]
    public ?string $equipHead;

    #[ORM\Column]
    public ?string $equipChest;

    #[ORM\Column]
    public ?string $equipHands;

    #[ORM\Column]
    public ?string $equipLegs;

    #[ORM\Column]
    public ?string $equipFeet;

    #[ORM\Column]
    public ?string $hotbar0;

    #[ORM\Column]
    public ?string $hotbar1;

    #[ORM\Column]
    public ?string $hotbar2;

    #[ORM\Column]
    public ?string $hotbar3;
}
