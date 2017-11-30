<?php
trait HelloWorld
{
    public function sayHello()
    {
        echo 'Hello World!' . PHP_EOL;
    }

    private function sayHelloNobody()
    {
        echo 'Hello No One!' . PHP_EOL;
    }
}

class MyClass1
{
    use HelloWorld { sayHello as protected; } // was change to protected
}

$my_class_one = new MyClass1();
// $my_class_one->sayHello(); // Fatal error:  Uncaught Error: Call to protected method

class MyClass2
{
    use HelloWorld {
        sayHello as private myPrivateHello; // created alias and change visibility
        sayHelloNobody as public; // redeclared to public
    }
}

$my_class_two = new MyClass2();
$my_class_two->sayHello(); // OK
$my_class_two->sayHelloNobody(); // OK
// $my_class_two->myPrivateHello(); // Fatal error:  Uncaught Error: Call to private method
