<?php

namespace App;

class Address
{
    public function __construct(
        private string $street,
        private string $city,
        private string $postalCode,
        private string $country,
    ) {}

    public function getFully(): string
    {
        return sprintf("%s %s %s - %s", $this->street, $this->postalCode, $this->city, $this->country);
    }
}