<?php
class Foo
{
    public static function aStaticMethod() // static must be declared AFTER visibility
    {
        print "Wow! That was static!\n";
    }
}

Foo::aStaticMethod();

$classname = "Foo";
$classname::aStaticMethod();
