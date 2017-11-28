<?php
require __DIR__ . '\vendor\autoload.php';

use Rych\Random\Random;

$randomizer = new Random;
echo "With initiation - " . $randomizer->getRandomInteger(1, 105) . PHP_EOL;

// or simply

echo "Without initiation - " . (new Random)->getRandomInteger(1, 105) . PHP_EOL;
