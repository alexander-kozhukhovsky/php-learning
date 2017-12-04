<?php
class A
{
    public static function foo()
    {
        static::who();
    }

    public static function who()
    {
        echo __CLASS__ . PHP_EOL;
    }
}

class B extends A
{
    public static function test()
    {
        A::foo();
        parent::foo();
        self::foo();
    }

    public static function who() // IF COMMENTED - WILL show - A
    {
        echo __CLASS__ . PHP_EOL;
    }
}

class C extends B
{
    public static function who() // IF COMMENTED - WILL show - B
    {
        echo __CLASS__ . PHP_EOL;
    }
}

// $a = new A();
// $b = new B();
$c = new C();

$c::test();
