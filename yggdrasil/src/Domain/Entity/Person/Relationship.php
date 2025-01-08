<?php

namespace App\Domain\Entity\Person;

class Relationship
{
    public function __construct(
        private Person $person,
        private Person $relatedPerson,
        private string $type,
        private ?\DateTimeInterface $startDate = null,
        private ?\DateTimeInterface $endDate = null,
    )
    {
    }
}
