<?php
interface TableInterface
{
    public function save(array $data); // all methods within interface must be public
}

interface LogInterface
{
    public function log(string $message); // all methods within interface must be public
}

interface LogWithDateTime extends LogInterface
{
    public function __construct();
}

class Table implements TableInterface, LogWithDateTime, Countable // from SPL
{
    private $count = 0;
    private $classname = __CLASS__;

    public function __construct()
    {
        print(strftime("$this->classname was created at %R %d.%m.%y\n"));
    }

    public function save(array $data)
    {
        return "Foo";
    }

    public function log(string $message) // no difference what argument variable name (but better ro use same as declared)
    {
        return "$message";
    }

    public function count() {
        return ++$this->count;
    }
}



$myTable = new Table;

echo $myTable->save([]) . "\n"; // when argument is array - echoes Foo
echo $myTable->log('Interfaces are awesome!') . "\n"; // when argument is array - echoes Foo
echo $myTable->count() . "\n"; // 1

for($i=0; $i<22; ++$i) {
    echo "I have been count()ed " . count($myTable) . " times\n"; // counts normally
}
