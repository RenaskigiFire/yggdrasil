<?php

namespace App\Domain\Entity\Person;

use App\Domain\ValueObject\Shared\UniqueId;

class Person
{
    public function __construct(
        private readonly UniqueId $id,
        private string $name,
        private string $lastNames,
        private ?\DateTimeInterface $birthDate = null,
        private ?\DateTimeInterface $deathDate = null,
    )
    {
    }
}
