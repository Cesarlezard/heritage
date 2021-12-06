<?php

require __DIR__ . '/../vendor/autoload.php';

$simpsons = [
    $bart = new \App\Simpson('Bart', new DateTime('1980-02-23'), 'male'),
    $lisa = new \App\Simpson('Lisa', new DateTime('1982-05-09'), 'female'),
    new \App\Simpson('Marge', new DateTime('1956-04-01'), 'female'),
    new \App\Simpson('Homer', new DateTime('1956-05-12'), 'male'),
];

foreach ($simpsons as $simpson) {
    echo $simpson->getName() . " | age: " . $simpson->getAge() . "\n";
}

echo "-------------\n";

if ($bart->olderThan($lisa)) {
    echo "Bart est plus vieux que Lisa\n";
} else {
    echo "Lisa est plus vieille que Bart\n";
}

echo "-------------\n";

$bart->heal('beer');

for($i = 0; $i < 10; $i++) {
    echo $bart->hp . ' | ' . $bart->run(50) . ' | ' . $bart->hp .  "\n";
}
