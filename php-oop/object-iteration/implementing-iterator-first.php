<?php
class MyIterator implements Iterator
{
    private $var = [];

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind()
    {
        echo "rewinding\n";
        reset($this->var);
    }

    public function current()
    {
        $var = current($this->var);
        echo "current: $var\n";
        return $var;
    }

    public function key()
    {
        $var = key($this->var);
        echo "key: $var\n";
        return $var;
    }

    public function next()
    {
        $var = next($this->var);
        echo "next: $var\n";
        return $var;
    }

    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== null && $key !== false);
        echo "valid: $var\n";
        return $var;
    }
}

$values = array('first', 'second', 'third');
$it = new MyIterator($values);

foreach ($it as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}
