<?php
abstract class Foo
{
    static function bar()
    {
        echo "test\n";
    }
}

$foo = new Foo; // Fatal error:  Uncaught Error: Cannot instantiate abstract class Foo
Foo::bar();
// works!
