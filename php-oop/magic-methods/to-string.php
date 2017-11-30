<?php
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
        //return __CLASS__; -- anything you want
    }
}

$class = new TestClass('Hello');
echo $class . PHP_EOL;
