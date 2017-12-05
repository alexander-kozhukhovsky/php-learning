<?php
class MyClass
{
    // public constructor
    public function __construct()
    {
        echo "construct\n";
    }

    public function MyPublic()
    {
        echo "public method\n";
    }

    protected function MyProtected()
    {
        echo "protected method\n";
    }

    private function MyPrivate()
    {
        echo "private method\n";
    }

    // This is public but not according PSR
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass();
$myclass->MyPublic();
//$myclass->MyProtected(); // Fatal error -- Call to protected
// $myclass->MyPrivate(); // Fatal error -- Call to protected
$myclass->Foo();

// extend
class MyClass2 extends MyClass
{
    // This is public but not according PSR
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        //$this->MyPrivate(); // Fatal Error -- Call to private method MyClass::MyPrivate()
    }
}

$myclass2 = new MyClass2();
$myclass2->MyPublic(); // Works
$myclass2->Foo2(); // Public and Protected work, not Private

class Bar
{
    public function test()
    {
        $this->testPublic();
        $this->testProtected();
        $this->testPrivate();
    }

    public function testPublic()
    {
        echo "Bar::testPublic\n";
    }

    protected function testProtected()
    {
        echo "Bar::testProtected\n";
    }

    private function testPrivate()
    {
        echo "Bar::testPrivate\n";
    }
}

$myBar = new Bar();
$myBar->test();
$myBar->testPublic();
// $myBar->testProtected(); // fatal error
// $myBar->testPrivate(); // fatal error

class Foo extends Bar
{
    public function testPublic()
    {
        echo "Foo::testPublic\n";
    }

    public function testProtected()
    {
        echo "Foo::testProtected\n";
    }

    private function testPrivate()
    {
        echo "Foo::testPrivate\n";
    }
}

$myFoo = new Foo();
$myFoo->test(); // testPrivate will be the same as it was in parent class; It's invisible for child
