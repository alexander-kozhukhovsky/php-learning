<?php
class BaseClass
{
    public function test()
    {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting()
    {
        echo "BaseClass::moreTesting() called\n";
    }
}

class ChildClass extends BaseClass
{
    public function test()
    {
        echo "ChildClass::test() called\n"; // was overriden without any problems
    }

    // public function moreTesting() { // cannot override final methods!
    //     echo "ChildClass::moreTesting() called\n";
    // }
}

$myclass = new ChildClass;
$myclass->test();
