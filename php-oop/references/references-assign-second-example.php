<?php
$a = "first\n";
$b = &$a;
$c = "second\n";
$b = $c;
echo $a; // shows "second"

$a = "first\n";
$b = &$a;
$c = "second\n";
$b = &$c;
echo $a; // shows "first"

$a = "first\n";
$b = &$a;
$b = null;
echo $a; // shows nothing (both are set to null)
if ($a === null) {
    echo "null\n";
}

$a = "first\n";
$b = &$a;
unset($b);
echo $a; // shows "first"

$a = "first\n";
$b = &$a;
$c = "second\n";
$a = $c;
echo $b; // shows "second"

$a = "first\n";
$b = &$a;
$c = "second\n";
$a = &$c;
echo $b; // shows "first"

$a = "first\n";
$b = &$a;
$a = null;
echo $b; // shows nothing (both are set to null)

$a = "first\n";
$b = &$a;
unset($a);
echo $b; // shows "first"
