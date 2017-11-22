<?php
trait Hello
{
    public function sayHello()
    {
        echo "Hello ";
    }
}

trait World
{
    public function sayWorld()
    {
        echo "World!\n";
    }
}

trait HelloWorld
{
    use Hello, World;
}

class MyHelloWorld
{
    use HelloWorld;
}

$say = new MyHelloWorld;

$say->sayHello();
$say->sayWorld();
