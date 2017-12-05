<?php
class Outer
{
    private $prop = 1;
    protected $prop2 = 2;

    protected function func1()
    {
        return 3;
    }

    public function func2()
    {
        return new class($this->prop) extends Outer // creates anonymous class with argument ($this->prop)
        {                                           // which extends the class in which is created
            private $prop3;

            public function __construct($prop)
            {
                $this->prop3 = $prop;
                echo "Anonymous was constructed\n";
            }

            public function func3()
            {
                return $this->prop2 + $this->prop3 + $this->func1() . PHP_EOL;
            }

            public function echoClass()
            {
                echo __CLASS__ . PHP_EOL;
            }
        };
    }
}

echo (new Outer)->func2()->echoClass(); // echoes class@anonymous path-to-file.php14A6528E
echo (new Outer)->func2()->func3();

$variant = new Outer();
$variant->func2()->func3(); // doesn't work
