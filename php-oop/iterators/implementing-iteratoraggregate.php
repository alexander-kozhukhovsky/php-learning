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

class MyCollection implements IteratorAggregate
{
    private $items = [];
    private $count = 0;

    // Required definition of interface IteratorAggregate
    public function getIterator()
    {
        return new MyIterator($this->items);
    }

    public function add($value)
    {
        $this->items[$this->count++] = $value;
    }
}

$coll = new MyCollection();
$coll->add('value 1');
$coll->add('value 2');
$coll->add('value 3');

foreach ($coll as $key => $val) {
    echo "key/value: [$key -> $val]\n\n";
}
