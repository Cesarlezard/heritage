<?php

namespace App;

use DateTime;

class Simpson
{
    public function __construct(
        private string $name,
        private DateTime $dateOfBirth,
        private string $gender,
        public int $hp = 50,
        private bool $sleeping = false
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
                $this->addHealth(100);
                break;
            case 'beer':
                $this->addHealth(5);
                break;
            case 'beans':
                $this->addHealth(20);
                break;
        }
    }

    public function run(int $time): int
    {
        $speed = 100 * $this->hp;
        $distance = $speed * $time;

        $this->addHealth(-10);

        return $distance;
    }

    public function wakeUp(): void
    {
        $this->sleeping = false;
    }

    public function isSleeping(): bool
    {
        return $this->sleeping;
    }

    private function addHealth(int $hp): void
    {
        $this->hp += $hp;

        if ($this->hp > 100) {
            $this->hp = 100;
        }

        if ($this->hp <= 0) {
            $this->hp = 0;
            $this->sleep();
        }
    }

    private function sleep(): void
    {
        $this->addHealth(40);

        $this->sleeping = true;
    }
}
