<?php

require __DIR__ . '/../vendor/autoload.php';

$simpsons = [
    new \App\Simpson('Bart', '1980-02-23', 'male'),
    new \App\Simpson('Lisa', '1982-05-09', 'female'),
    new \App\Simpson('Marge', '1956-04-01', 'female'),
    new \App\Simpson('Homer', '1956-05-12', 'male'),
];

foreach ($simpsons as $simpson) {
    echo $simpson->getName() . " | age: " . $simpson->getAge() . "\n";
}
