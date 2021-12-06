<?php

namespace App;

use DateTime;

class Simpson
{
    public function __construct(
        public $name,
        public $dateOfBirth,
        public $gender,
        public $hp = 50
    ) {}

    public function getName()
    {
        return $this->name . ' Simpson';
    }

    public function getAge()
    {
        $dateOfBirth = (new Datetime($this->dateOfBirth));

        $now = new Datetime();

        return $dateOfBirth->diff($now)->y;
    }

    public function olderThan($simpson)
    {
        return $this->getAge() > $simpson->getAge();
    }

    public function heal($food)
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

    public function run($time)
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
