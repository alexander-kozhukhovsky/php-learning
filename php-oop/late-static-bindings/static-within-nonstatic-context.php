<?php
class A
{
    private function foo()
    {
        echo "Success!\n";
    }

    public function test()
    {
        $this->foo();
        static::foo();
    }
}

class B extends A
{
    /* foo() will be copied to B, hence its scope will still be A and
    * the call be successful */
    // следовательно foo() область действия по прежнему А
}

class C extends A
{
    private function foo()
    {
        /* original method is replaced; the scope of the new one is C */
        /* исходный метод заменен; область действия нового метода - С */
    }
}

$b = new B();
$b->test();

$c = new C();
// $c->test();
