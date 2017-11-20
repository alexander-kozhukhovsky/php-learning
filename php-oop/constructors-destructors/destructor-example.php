<?php
class MyDestructableClass
{
    function __construct()
    {
        print "In constructor\n";
    }

    function __destruct()
    {
        print "Destroying " . __CLASS__ . " on line " . __LINE__ . "\n";
    }
}

$obj = new MyDestructableClass();
