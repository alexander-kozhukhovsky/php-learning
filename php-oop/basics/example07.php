<?php
// Same class property and method names - is OK
class Foo
{
    public $bar = 'property';

    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
