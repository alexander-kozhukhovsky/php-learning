<?php
// В PHP 5.3.0 введены несколько новых методов создания экземпляров объекта:
class Test
{
    public static function getNew() // static goes AFTER visibility declaration; abstract and final - BEFORE
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1();

var_dump($obj1 !== $obj2); // TRUE

var_dump($obj2 instanceof Test); // TRUE

$obj3 = Test::getNew();

var_dump($obj3 instanceof Test); // TRUE

$obj4 = Child::getNew();
var_dump($obj4 instanceof Test); // TRUE
