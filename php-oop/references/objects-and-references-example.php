<?php
class A
{
    public $foo = 1;
}

$a = new A;
$b = $a; // copies of same identifier like ($a) = ($b) = <id>

$b->foo = 2;
echo "From copy - " . $a->foo . "\n"; // will return 2

//////////////////////////////////////////////////////////////

$c = new A;
$d = &$c; // $c and $d are references like ($c,$d) = <id>

$d->foo = 2;
echo "From reference - " . $c->foo . "\n";

//////////////////////////////////////////////////////////////

$e = new A;
function fooFunction($obj)
{
    // ($obj) = ($e) = <id>
    $obj->foo = 2;
    return "From within fooFunction - " . $obj->foo . "\n";
}

echo fooFunction($e);
echo "From outside fooFunction - " . $e->foo . "\n";
