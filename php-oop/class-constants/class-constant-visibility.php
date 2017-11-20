<?php
class Foo
{
    // As of PHP 7.1.0
    public const BAR = 'Foo public bar';
    private const BAZ = 'Foo private baz';
    protected const BAG = 'Foo protected bag';

    function echoConstants()
    {
        echo self::BAR . "\n";
        echo self::BAZ . "\n";
        echo self::BAG . "\n";
    }
}

class Beep extends Foo
{
    public const BAR = 'Beep public bar';
    private const BAZ = 'Beep private baz';
    protected const BAG = 'Beep protected bag';

    function echoConstants()
    {
        echo self::BAR . "\n";
        echo self::BAZ . "\n";
        echo self::BAG . "\n";
    }

    function echoParentConstants()
    {
        echo parent::BAR . "\n";
        // echo parent::BAZ . "\n"; // Fatal error:  Uncaught Error: Cannot access private const Foo::BAZ
        echo parent::BAG . "\n";
    }
}

Foo::echoConstants();
// echo Foo::BAZ, PHP_EOL; // FATA ERROR -- cannot acces private

Beep::echoConstants(); // BAG = protected bag

$newBeep = new Beep();
$newBeep->echoConstants();
$newBeep->echoParentConstants();

echo $newBeep::BAR . "\n"; // will be BAR = 'Beep public bar';
// echo $newBeep::BAZ . "\n";
// echo $newBeep::BAG . "\n";
