<?php
class MyClass
{
    protected function myFunc()
    {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass extends MyClass
{
    // override parent's definition
    public function myFunc()
    {
        // Try to call parent function
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();
