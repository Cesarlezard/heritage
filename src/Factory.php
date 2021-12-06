<?php

namespace App;

use Exception;

class Factory
{
    const MIN_PEOPLE = 1;
    const MAX_PEOPLE = 50;

    public function __construct(
        public string $name,
        private array $members,
        public Address $address,
    ) {
        $this->setMembers($this->members);
    }

    public function countMembers(): int
    {
        return count($this->members);
    }

    public function getOlderMember(): Simpson
    {
        $people = $this->members; // Permet de ne pas ordonner la variable $this->members

        uasort($people, function (Simpson $a, Simpson $b) {
           if ($a->getAge() === $b->getAge()) {
               return 0;
           }

           return ($a->getAge() > $b->getAge()) ? -1 : 1;
        });

        return array_shift($people);
    }

    private function setMembers(array $people): void
    {
        if (count($people) < self::MIN_PEOPLE || count($people) > self::MAX_PEOPLE) {
            throw new Exception("Unexpected number of members.");
        }

        foreach ($people as $person) {
            if (! $person instanceof Simpson) {
                throw new Exception("Unexpected member type.");
            }
        }

        $this->members = $people;
    }
}