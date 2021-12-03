<?php

namespace App;

class Pet extends Character implements Animal
{
    public function __construct(string $name, protected string $color)
    {
        parent::__construct($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'color' => $this->getColor(),
        ];
    }
}
