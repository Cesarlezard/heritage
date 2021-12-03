<?php

require __DIR__ . '/../vendor/autoload.php';

$simpsons = [
    new \App\Simpson('Bart'),
    new \App\Simpson('Lisa'),
    new \App\Simpson('Marge'),
    new \App\Simpson('Homer'),
];

$pets = [
    new \App\Pet('Petit Papa Noël', 'brown'),
    new \App\Pet('Boule de neige', 'black'),
];

$stuff = [
    new \App\Stuff('painting'),
    new \App\Stuff('sofa'),
    new \App\Stuff('house'),
    new \App\Stuff('soda'),
];

$elements = array_merge($simpsons, $pets, $stuff);

foreach ($elements as $element) {
    echo $element . "\n";
}
