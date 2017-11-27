<?php
interface BaseInterface
{
    public function requiredFunction();
}

class BaseClass implements BaseInterface
{
    public function requiredFunction()
    {}
}

class ChildClass extends BaseClass // The child class automatically inherits all interfaces from the parent class
{
    public function requiredFunction()
    {}
}

// This doesn't implement I.
class AnotherClass
{}

function requiredFunction(BaseInterface $i)
{
    echo get_class($i) . "\n";
}

requiredFunction(new BaseClass);
requiredFunction(new ChildClass);
// requiredFunction(new AnotherClass);
