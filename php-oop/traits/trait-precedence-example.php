<?php
class Base
{
    public function sayHello()
    {
        echo "Hello from Base!\n";
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo "Say World!\n";
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;
}

$myhelloworld = new MyHelloWorld();
$myhelloworld->sayHello();
