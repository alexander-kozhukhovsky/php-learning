<?php
$var = "closure";

$func = function () {echo "{$var} called";};
// echo $func(); // Notice - undefined variable: $var

$funct = function ($string) {echo "$string was called\n";};
echo $funct($var); // everything is OK

$funct = function () use ($var) {echo "{$var} was called\n";}; // with use keyword
echo $funct(); // everything is OK

$funct = function () use ($var) {echo "{$var} was called\n"; $var = "changed closue";}; // closure can not pass back variable
echo $funct(); // echoes OK
echo $var . PHP_EOL; // the old one
