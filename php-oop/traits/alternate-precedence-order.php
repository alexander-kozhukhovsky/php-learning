<?php
trait HelloWorld
{
    public function sayHello()
    {
        echo "Hello World!\n";
    }
}

class TheWorldIsNotEnough
{
    use HelloWorld;
    public function sayHello()
    {
        echo "Hello World!\n";
        echo "Hello Universe!\n";
    }
}

$hi = new TheWorldIsNotEnough();
$hi->sayHello();
