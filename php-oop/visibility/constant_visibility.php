<?php
class MyClass
{
    public const MY_PUBLIC       = "public\n";
    protected const MY_PROTECTED = "protected\n";
    private const MY_PRIVATE     = "private\n";

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}

$myclass = new MyClass();
MyClass::MY_PUBLIC; // Works
// MyClass::MY_PROTECTED; // Fatal Error
// MyClass::MY_PRIVATE; // Fatal Error
$myclass->foo(); // Public, Protected and Private work


class MyClass2 extends MyClass
{
    // This is public but not via PSR
    function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        //echo self::MY_PRIVATE; // Fatal Error
    }
}

$myclass2 = new MyClass2;
echo MyClass2::MY_PUBLIC; // Works
$myclass2->foo2(); // Public and Protected work, not Private
