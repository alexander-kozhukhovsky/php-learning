<?php
trait Log
{
    protected function log($msg)
    {
        echo "$msg\n";
    }
}

trait PrintLog
{
    public function printDate()
    {
        return strftime("%d.%m.%Y");
    }
    public function printTime()
    {
        return strftime("%R");
    }
}

interface WithConstruct
{
    public function __construct(bool $debug);
}

class BaseClass implements WithConstruct
{
    use Log, PrintLog;

    private $parentness;
    private $parentText = '';

    public function __construct(bool $debug = false)
    {
        if ($debug) {
            $this->parentness = class_parents($this);
            if (!empty($this->parentness)) {
                foreach ($this->parentness as $parent => $name) {
                    $this->parentText .= " <= $name";
                }
            }
            echo "Sent from '" . get_called_class() . $this->parentText . "'\n";
            echo "PrintLog: " . self::printTime() . " " . self::printDate() . PHP_EOL;
        }
    }

    public function save()
    {
        $this->log('Initialization...');
    }

    public function sayHello($who)
    {
        echo "Hi $who from " . get_called_class() . "!\n";
    }
}

class MyBaseClass extends BaseClass
{}

class MyFirstClass extends MyBaseClass
{}

$baseClass = new BaseClass(1);
$baseClass->save();
$baseClass->sayHello('First');
echo PHP_EOL;

$myBaseClass = new MyBaseClass(1);
$myBaseClass->save();
$myBaseClass->sayHello('Second');
echo PHP_EOL;

(new MyFirstClass(true))->save();
(new MyFirstClass(false))->sayHello('Mr. Anderson');
echo PHP_EOL;
