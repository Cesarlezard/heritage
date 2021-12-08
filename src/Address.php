<?php

namespace App;

class Address
{
    private string $street;
    private string $city;
    private string $postalCode;
    private string $country;

    public function __construct(
        string $street,
        string $city,
        string $postalCode,
        string $country
    ) {
        $this->country = $country;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->street = $street;
    }

    public function getFully(): string
    {
        return sprintf("%s %s %s - %s", $this->street, $this->postalCode, $this->city, $this->country);
    }
}