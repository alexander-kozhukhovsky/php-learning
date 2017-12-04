<?php
function bool2str($bool)
{
    if ($bool === false) {
        return "False\n";
    } else {
        return "True\n";
    }
}

function compareObjects(&$o1, &$o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "\n";
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "\n";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "\n";
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "\n";
}

class Flag
{
    public $flag;

    public function __construct($flag = true)
    {
        $this->flag = $flag;
    }
}

class OtherFlag
{
    public $flag;

    public function __construct($flag = true)
    {
        $this->flag = $flag;
    }
}

$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();
$c = clone $o;

echo "Compare with same class\n";
compareObjects($o, $p);

echo "\nCompare with same instance\n";
compareObjects($o, $q);

echo "\nCompare two different classes\n";
compareObjects($o, $r);

echo "\nCompare original and cloned object\n";
compareObjects($o, $c);
