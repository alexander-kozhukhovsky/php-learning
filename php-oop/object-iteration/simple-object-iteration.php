<?php
class MyClass
{
    public $var1 = "value 1\n";
    public $var2 = "value 2\n";
    public $var3 = "value 3\n";

    protected $protected = "protected var\n";
    private $private = "private var\n";

    public function iterateVisible()
    {
        echo "MyClass::iterateVisible:\n";
        echo "From object function:\n\n";
        foreach ($this as $key => $value) {
            print "$key => $value";
        }
        echo PHP_EOL;
    }
}

$myclass = new MyClass;

var_dump($myclass);

$myclass->iterateVisible();

echo "From OUT OF object\n\n";
foreach ($myclass as $key => $value) {
    print "$key => $value";
}
echo PHP_EOL;

$myclass->iterateVisible();

// MyClass::iterateVisible(); // PHP Fatal error:  Uncaught Error: Using $this when not in object context
