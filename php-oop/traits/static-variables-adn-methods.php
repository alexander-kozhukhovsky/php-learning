<?php
trait Counter
{
    public static $c = "Hey"; // static property

    public function inc()
    {
        $comma = ", "; // static variable
        $c = "You!";
        return $comma . $c . PHP_EOL;
    }
}

trait StaticExample
{
    public static function doSomething() // static method
    {
        return "Do something!\n";
    }
}

class C1
{
    use Counter;
}

class C2
{
    use Counter, StaticExample;
}

$c1 = new C1;

echo $c1::$c;
echo $c1->inc();

$c2 = new C2;

$c2->inc();
echo $c2::doSomething();

