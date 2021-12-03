<?php

namespace App;

abstract class Character extends Element
{
    public function __construct(protected string $name) {}

    abstract public function getName(): string;

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
        ];
    }
}
