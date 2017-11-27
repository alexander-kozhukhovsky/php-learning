<?php
class BaseClass
{}
class ChildClass extends BaseClass
{}

// This doesn't extend C.
class AnotherClass
{}

function myFunction(BaseClass $c)
{
    echo get_class($c) . "\n";
}

myFunction(new BaseClass);
myFunction(new ChildClass);
// myFunction(new AnotherClass); // Uncaught TypeError: Argument 1 passed to myFunction() must be an instance of BaseClass, instance of AnotherClass given
