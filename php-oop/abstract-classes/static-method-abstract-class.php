<?php
abstract class Foo
{
    static function bar()
    {
        echo "test\n";
    }
}

Foo::bar();
// works!
