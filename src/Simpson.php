<?php

namespace App;

class Simpson extends Character
{
    public function getName(): string
    {
        return $this->name . ' Simpson';
    }
}
