<?php
class TestClass
{
    private $classname = __CLASS__, $any, $array, $you, $wish;

    public function __construct()
    {
        echo "The class '$this->classname' was constructed...\n";
    }

    public function __destruct()
    {
        echo "The class '$this->classname' was destructed...\n";
    }

    public function __toString()
    {
        return "This is a class. Not a string!\n";
    }

    public function __call($name, $arguments)
    {
        echo "Method '$name' doesn't exists within '$this->classname' class!\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Static method '$name' doesn't exists within '" . __CLASS__ . "' class!\n";
    }

    public function __set($name, $value)
    {
        echo "You can't assign '$value' to '$name' property of '$this->classname' class because it doesn't exists!\n";
    }

    public function __get($name)
    {
        echo "Property '$name' doesn't exists!\n";
    }

    public function __isset($name)
    {
        echo "Is '$name' set? Who knows...\n";
    }

    public function __unset($name)
    {
        echo "It's smart enough to unset '$name'!\n";
    }

    public function __sleep()
    {
        echo "I feel like I am being serialized!\n";
        return array('any', 'array', 'you', 'wish'); // should returb array
    }

    public function __wakeup()
    {
        echo "Finally it's over and I am free again!\n";
    }

    public function __invoke($a, $b)
    {
        echo "Invokation happens! Is '$a' === '$b'?\n";
        return $a === $b;
    }

    public static function __set_state($an_array)
    {
        return "nothing";
    }

    public function __clone()
    {
        echo "I was cloned!\n";
    }

    public function __debugInfo()
    {
        echo "Debugging is a very good habit for programmer!\n";
    }
}

$myClass = new TestClass;

echo $myClass;
$myClass->dosentExists();
TestClass::doesntExists();
$myClass->isItOk = "ok!";
echo $myClass->isItOk;

isset($myClass->isItOk);
unset($myClass->isItOk);

$serial = serialize($myClass);
unserialize($serial);

var_dump($myClass(1, 2));

echo var_export($myClass, true) . PHP_EOL;

$newClass = clone $myClass;

var_dump(new TestClass());
