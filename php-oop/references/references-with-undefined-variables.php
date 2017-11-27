<?php
function foo(&$var)
{
    echo "something\n";
}

foo($a); // $a is "created" and assigned to null

var_dump($a);

$b = array(); // is empty
foo($b['b']); // b doesnt exist
var_dump(array_key_exists('b', $b)); // bool(true)

$c = new StdClass;
foo($c->d); // d property is unknown
var_dump(property_exists($c, 'd')); // bool(true)
