<?php
class Foo
{
    public $bar;

    public function __construct()
    {
        $this->bar = function() {
            return 42;
        };
    }
}

$obj = new Foo();

// Начиная с PHP 5.3.0:
$func = $obj->bar;
echo $func(), PHP_EOL;

// Или так, начиная с PHP 7.0.0:
echo ($obj->bar)(), PHP_EOL;
