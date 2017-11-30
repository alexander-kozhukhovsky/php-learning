<?php
class Dumper
{
    private $prop;

    public function __construct($val)
    {
        $this->prop = $val;
    }

    public function __debugInfo()
    {
        return ['propSquared' => $this->prop ** 2]; // возвести во вторую степень
        // return "Simply ME.\n"; // ERROR! MUST RETURN AN ARRAY!!!
    }

    public function __destruct()
    {
        echo "BYE BYE!\n";
    }
}

var_dump(new Dumper(42));

// var_dump(new Dumper('Who am I?')); // not number
