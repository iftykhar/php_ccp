<?php


require_once 'vendor/autoload.php';

$fake  = Faker\Factory::create();

echo $fake->name().PHP_EOL;
echo $fake->address().PHP_EOL;