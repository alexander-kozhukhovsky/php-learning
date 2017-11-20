<?php
class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant()
    {
        echo self::CONSTANT . "\n";
    }

    function myShowConstant()
    {
        echo CONSTANT . "\n"; // shows nothing -- PHP Notice:  Use of undefined constant CONSTANT - assumed 'CONSTANT'
    }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n"; // as of PHP 5.3.0

$class = new MyClass();

$class->showConstant();
//$class->myShowConstant();

echo $class::CONSTANT . "\n"; // as of PHP 5.3.0
