<?php
$a = 1;
$b = array(2, 3);
$array = array(&$a, &$b[0], &$b[1]);

// increase each element by 1
$array[0]++;
$array[1]++;
$array[2]++;

// echo "\$a = $a, \$b = $b\n"; // notice array to string conversion

echo "\$a is on: ";
var_dump($a);
echo PHP_EOL;

echo "\$b is on: ";
var_dump($b);
echo PHP_EOL;

/* $a == 2, $b == array(3, 4); */
