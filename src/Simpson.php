<?php

namespace App;

use DateTime;

class Simpson
{
    public function __construct(
        public string $name,
        public DateTime $dateOfBirth,
        public string $gender,
        public int $hp = 50
    ) {}

    public function getName(): string
    {
        return $this->name . ' Simpson';
    }

    public function getAge(): int
    {
        $now = new Datetime();

        return $this->dateOfBirth->diff($now)->y;
    }

    public function olderThan(Simpson $simpson): bool
    {
        return $this->getAge() > $simpson->getAge();
    }

    public function heal(string $food): void
    {
        switch ($food) {
            case 'donuts':
                $this->hp = 100;
                break;
            case 'beer':
                $this->hp += 5;
                break;
            case 'beans':
                $this->hp  += 20;
                break;
        }

        if ($this->hp > 100) {
            $this->hp = 100;
        }
    }

    public function run(int $time): int
    {
        $speed = 100 * $this->hp;
        $distance = $speed * $time;

        $this->hp -=10;

        if ($this->hp < 0) {
            $this->hp = 0;
        }

        return $distance;
    }
}
