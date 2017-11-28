<?php
namespace Foo\Bar;

include 'qualification.php';

const FOO_CONST = 'Foo\Bar const';
function fooFunction()
{
    return 'Foo\Bar function';
}
class FooClass
{
    public static function staticmethod()
    {
        return 'Foo\Bar class method';
    }
}

/* Unqualified name */
echo fooFunction() . "\n";
echo FooClass::staticmethod() . "\n";
echo FOO_CONST . "\n";

/* Qualified name */
echo subnamespace\fooFunction() . "\n";
echo subnamespace\FooClass::staticmethod() . "\n";
echo subnamespace\FOO_CONST . "\n";

/* Fully qualified name */
echo \Foo\Bar\subnamespace\fooFunction() . "\n";
echo \Foo\Bar\subnamespace\FooClass::staticmethod() . "\n";
echo \Foo\Bar\subnamespace\FOO_CONST . "\n";

/* Fully qualified name */
echo \Foo\Bar\fooFunction() . "\n";
echo \Foo\Bar\FooClass::staticmethod() . "\n";
echo \Foo\Bar\FOO_CONST . "\n";
