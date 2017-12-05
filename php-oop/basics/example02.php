<?php
class A
{
    function foo() // if is not set up visibility -- public is default
    {
        if (isset($this)) {
            echo '$this определена (';
            echo get_class($this); // возвращает имя класса, экземляром которого является объект
            echo ")\n";
        } else {
            echo "\$this не определена\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo(); // $this определена (A)

A::foo(); // $this не определена

$b = new B();
$b->bar(); // $this не определена;
// BUT! php5 - $this определена (B)

B::bar(); // $this не определена
