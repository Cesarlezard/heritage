<?php

namespace App;

abstract class Element
{
    abstract public function toArray(): array;

    public function __toString(): string
    {
        return implode(' | ', $this->toArray());
    }
}
