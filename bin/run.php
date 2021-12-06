<?php

require __DIR__ . '/../vendor/autoload.php';

$simpsons = [
    $bart = new \App\Simpson('Bart', '1980-02-23', 'male'),
    new \App\Simpson('Lisa', '1982-05-09', 'female'),
    new \App\Simpson('Marge', '1956-04-01', 'female'),
    new \App\Simpson('Homer', '1956-05-12', 'male'),
];

foreach ($simpsons as $simpson) {
    echo $simpson->getName() . " | age: " . $simpson->getAge() . "\n";
}

echo "-------------\n";

$bart->heal('beer');

for($i = 0; $i < 10; $i++) {
    echo $bart->hp . ' | ' . $bart->run(50) . ' | ' . $bart->hp .  "\n";
}
