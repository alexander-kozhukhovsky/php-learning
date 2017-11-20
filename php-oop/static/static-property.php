<?php
class Foo
{
    public static $my_static = 'Parent foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public static $my_static = 'Child foo';

    public function fooStatic()
    {
        return parent::$my_static;
    }
}


print Foo::$my_static . "\n";

$foo = new Foo();
print $foo->staticValue() . "\n";
// print $foo->my_static . "\n"; // NOTICE! Accessing STATIC PROPERTY as NON STATIC: Undefined "Property" my_static

print $foo::$my_static . "\n";
$classname = 'Foo';
print $classname::$my_static . "\n"; // As of PHP 5.3.0

print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";
