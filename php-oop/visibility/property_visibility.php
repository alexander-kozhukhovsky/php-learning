<?php
class MyClass
{
    public $public       = "Public\n";
    protected $protected = "Protected\n";
    private $private     = "Private\n";

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // Works
//echo $obj->protected; // Fatal Error
//echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private


class MyClass2 extends MyClass
{
    // We can redeclare the public and protected properties, but NOT private
    public $public       = "Redeclared Public\n";
    protected $protected = "Redeclared Protected\n";

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        //echo $this->private; // NOTICE Undefined
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // Works
//echo $obj2->protected; // Fatal Error
//echo $obj2->private; // NOTICE Undefined
$obj2->printHello(); // Shows Public2, Protected2, Undefined
