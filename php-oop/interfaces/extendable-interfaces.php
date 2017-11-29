<?php
interface a
{
    public function foo();
}

interface b extends a
{
    public function baz(Baz $baz);
}

// this class will work
class C implements b
{
    public function __construct()
    {
        echo __CLASS__ . PHP_EOL;
    }

    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

$c = new C();

// This will not work
// class D implements b
// {
//     public function foo()
//     {
//     }

//     public function baz(Foo $baz)
//     {
//     }
// }

// $d = new D();
