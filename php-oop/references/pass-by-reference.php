<?php
function foo(&$var)
{
    $var++;
}

$a = 21;
foo($a);

echo $a . PHP_EOL;
// $a is 6 here

////////////////////////////////////////////////////////////////

function fooFighter(&$var)
{
    $var++;
    return $var;
}

function &bar()
{
    global $a;
    $a = 75;
    return $a;
}

echo fooFighter(bar()) . PHP_EOL; // returns 76
echo $a . PHP_EOL; // $a is 76

////////////////////////////////////////////////////////////////
$b = 0;

function fooNtik(&$var)
{
    $var++;
    return $var;
}

function barChelo() // Note the missing &
{
    $a = 33;
    return $a;
}

// fooNtik(barChelo()); // Produces fatal error as of PHP 5.0.5, strict standards notice
                    // as of PHP 5.1.1, and notice as of PHP 7.0.0

echo fooNtik($b) . PHP_EOL;
//fooNtik($a = 33); // Expression, not variable
echo fooNtik($a) . PHP_EOL;
// fooNtik(5); // Produces fatal error
