<?php
class MyClass
{
    const CONST_VALUE = "A constant value\n";
}

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon()
    {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon(); // As of PHP 5.3.0

OtherClass::doubleColon();
