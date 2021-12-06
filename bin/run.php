<?php

require __DIR__ . '/../vendor/autoload.php';

$houseMembers = [
    new \App\Simpson('Bart', new DateTime('1980-02-23'), 'male'),
    new \App\Simpson('Lisa', new DateTime('1982-05-09'), 'female'),
];

$houseAddress = new \App\Address(
    "742 Evergreen Terrac",
    "Springfield",
    "007",
    "USA"
);

$house = new \App\House("Simpson's house", $houseMembers, $houseAddress);

echo "Nombre de membres : " . $house->countMembers() . "\n";
echo "Membre le plus vieux : " . $house->getOlderMember()->getName() . "\n";
echo "Adresse : " . $house->address->getFully() . "\n";

echo "---------\n";

$factoryMembers = [
    $marge = new \App\Simpson('Marge', new DateTime('1956-04-01'), 'female'),
    new \App\Simpson('Homer', new DateTime('1956-05-12'), 'male'),
    new \App\Simpson('Diego', new DateTime('2001-01-24'), 'male'),
];

$factoryAddress = new \App\Address(
    "Centrale nucléaire Trojan",
    "Springfield",
    "007",
    "USA"
);

$factory = new \App\Factory("Simpson's factory", $factoryMembers, $factoryAddress);

echo "Nombre de membres : " . $factory->countMembers() . "\n";
echo "Membre le plus vieux : " . $factory->getOlderMember()->getName() . "\n";
echo "Adresse : " . $factory->address->getFully() . "\n";

echo "---------\n";

$city = new \App\City('Springfield', [$house, $factory]);

echo "Population : " . $city->countPopulation() . "\n";
