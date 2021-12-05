<?php

namespace App;

use DateTime;

class Simpson
{
    public function __construct(
        public $name,
        public $dateOfBirth,
        public $gender
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
}
