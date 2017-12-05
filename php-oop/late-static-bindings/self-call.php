<?php
class A
{
    public static function who()
    {
        echo __CLASS__ . PHP_EOL;
    }

    public static function test()
    {
        self::who();
    }
}

A::who(); // A
A::test(); // A

class B extends A
{
    public static function who()
    {
        echo __CLASS__ . PHP_EOL;
    }
}

B::who(); // B
B::test(); // A -- to make it B we have to redeclare test() or change parent self:: on static::
