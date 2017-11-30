<?php
trait Hello
{
    public function sayHello()
    {
        echo "Hello" . $this->getWorld();
    }

    abstract public function getWorld();
}

class MyHelloWorld
{
    private $world;
    use Hello;

    public function getWorld()
    {
        return $this->world;
    }

    public function setWorld($val = "no one!\n")
    {
        $this->world = $val;
    }
}

$say = new MyHelloWorld();
$say->setWorld("Bigman!\n");
$say->sayHello();
