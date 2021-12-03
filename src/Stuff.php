<?php

namespace App;

class Stuff extends Element
{
    public function __construct(private string $name) {}

    public function toArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }
}
