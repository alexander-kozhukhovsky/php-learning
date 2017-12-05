<?php
class Foo
{
    // As of PHP 5.3.0
    const ONE = 1;
    const TWO = self::ONE * 2;
    const THREE = self::ONE + self::TWO;
    const SENTENCE = 'The value of THREE is ' . self::THREE;
}

echo Foo::ONE . "\n";

$newClass = new Foo();
echo $newClass::ONE . "\n";
echo $newClass::TWO . "\n";
echo $newClass::THREE . "\n";
echo $newClass::SENTENCE . "\n";
