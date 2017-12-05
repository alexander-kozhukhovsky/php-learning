<?php
class foo
{
    public $value = 42;

    public function &getValue() // because returns variable
    {
        // echo "something"; // Only variable references should be returned by reference
        return $this->value;
    }
}

$obj = new foo;
echo $obj->getValue() . PHP_EOL;
echo $obj->value . PHP_EOL;

$myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.

$obj->value = 2;

echo $myValue . PHP_EOL;
