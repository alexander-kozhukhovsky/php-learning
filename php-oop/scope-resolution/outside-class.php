<?php
class MyClass
{
    const CONST_VALUE = "A constant value\n";
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // As of PHP 5.3.0

echo MyClass::CONST_VALUE;
