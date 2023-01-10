<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ApiResource]
class Quest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="character_id", type="integer", nullable=false)
     */
    #[ORM\Column]
    private $characterId;

    /**
     * @var string
     *
     * @ORM\Column(name="quest", type="string", length=70, nullable=false)
     */
    private $quest;

    /**
     * @var bool
     *
     * @ORM\Column(name="completed", type="boolean", nullable=false)
     */
    private $completed;

    /**
     * @var int
     *
     * @ORM\Column(name="task1", type="integer", nullable=false)
     */
    private $task1;

    /**
     * @var int
     *
     * @ORM\Column(name="task2", type="integer", nullable=false)
     */
    private $task2;

    /**
     * @var int
     *
     * @ORM\Column(name="task3", type="integer", nullable=false)
     */
    private $task3;

    /**
     * @var int
     *
     * @ORM\Column(name="task4", type="integer", nullable=false)
     */
    private $task4;
}
