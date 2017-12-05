<?php
class SimpleClass
{
    // valid as (с момента) of PHP 5.6.0:
    public $var1 = 'hello ' . 'world';
    // valid as of PHP 5.3.0:
    public $var2 = <<<EOD
hello world
EOD;
    // valid as of PHP 5.6.0:
    public $var3 = 1+2;
    // invalid property declarations:
    // public $var4 = self::myStaticMethod();
    // public $var5 = $myVar;

    // valid property declarations:
    public $var6 = myConstant;
    public $var7 = array(true, false);

    // valid as of PHP 5.3.0:
    public $var8 = <<<'EOD'
hello world
EOD;
}
