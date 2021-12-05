<?php

require __DIR__ . '/../vendor/autoload.php';

$bart = new \App\Simpson();
$bart->name = 'Bart';
$bart->dateOfBirth = '1980-02-23';
$bart->gender = 'male';

echo $bart->name . ' | ' . $bart->dateOfBirth . ' | ' . $bart->gender . "\n";

$lisa = new \App\Simpson();
$lisa->name = 'Lisa';
$lisa->dateOfBirth = '1982-05-09';
$lisa->gender = 'female';

echo $lisa->name . ' | ' . $lisa->dateOfBirth . ' | ' . $lisa->gender . "\n";

$marge = new \App\Simpson();
$marge->name = 'Marge';
$marge->dateOfBirth = '1956-01-01';
$marge->gender = 'female';

echo $marge->name . ' | ' . $marge->dateOfBirth . ' | ' . $marge->gender . "\n";

$homer = new \App\Simpson();
$homer->name = 'Homer';
$homer->dateOfBirth = '1956-05-12';
$homer->gender = 'male';

echo $homer->name . ' | ' . $homer->dateOfBirth . ' | ' . $homer->gender . "\n";
