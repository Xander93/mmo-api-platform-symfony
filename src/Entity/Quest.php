<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class Quest
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    public int $id;

    #[ORM\Column]
    public int $characterId;

    #[ORM\Column]
    public string $quest;

    #[ORM\Column]
    public bool $completed;

    #[ORM\Column]
    public int $task1;

    #[ORM\Column]
    public int $task2;

    #[ORM\Column]
    public int $task3;

    #[ORM\Column]
    public int $task4;
}
