<?php
namespace Foo;

function strlen($var)
{
    return "Foo strlen function returns " . \strlen($var);
}

const INI_ALL = 22;

class Exception
{
    public function customFunction() {
        echo "Мы можем определять новые методы в наследуемом классе\n";
    }
}

$a = \strlen('hi'); // calls global function strlen
echo "$a\n"; // 2

echo strlen('hi') . "\n"; // from namespace
echo \Foo\strlen('hi') . "\n"; // from namespace

var_dump(INI_ALL); // int(22)

$b = \INI_ALL;
echo $b . "\n"; // Global

echo INI_ALL . "\n"; // from namespace - 22
echo \Foo\INI_ALL . "\n"; // from namespace - 22

$c = new \Exception('error'); // instantiates global class Exception
echo $c . "\n";
// $c->customFunction(); //  Call to undefined method Exception::customFunction()

$d = new Exception();
$d->customFunction();
