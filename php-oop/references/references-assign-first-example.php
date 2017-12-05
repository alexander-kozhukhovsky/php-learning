<?php
$a = null;
$a = &$b; // is reference assigning
$a = "Something\n";
echo $a . $b;

// redeclare via B
$b = "Nothing\n";
echo $a . $b;

// redeclare via A
$a = "Anything\n";
echo $a . $b;

unset($a);
echo $b;

$a = 1;
$b = &$a;
unset($a); // $a will be unset but $b will be equal 1!

echo $b . PHP_EOL;
