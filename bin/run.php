<?php

require __DIR__ . '/../vendor/autoload.php';

$houseMembers = [
    new \App\Simpson('Bart', new DateTime('1980-02-23'), 'male'),
    new \App\Simpson('Lisa', new DateTime('1982-05-09'), 'female'),
];

$house = new \App\House("Simpson's house", $houseMembers);

echo "Nombre de membres : " . $house->countMembers() . "\n";
echo "Membre le plus vieux : " . $house->getOlderMember()->getName() . "\n";

$factoryMembers = [
    new \App\Simpson('Marge', new DateTime('1956-04-01'), 'female'),
    new \App\Simpson('Homer', new DateTime('1956-05-12'), 'male'),
    new \App\Simpson('Diego', new DateTime('2001-01-24'), 'male'),
];

$factory = new \App\Factory("Simpson's house", $factoryMembers);

echo "Nombre de membres : " . $factory->countMembers() . "\n";
echo "Membre le plus vieux : " . $factory->getOlderMember()->getName() . "\n";
