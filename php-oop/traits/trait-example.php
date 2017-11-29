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

    abstract public function __construct(bool $debug);
}

trait SayBye
{
    public function sayGoodBye() {
        echo 'Good ';
        parent::sayGoodBye();
        echo PHP_EOL;
    }
}

class BaseClass
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

    public function sayGoodBye() {
        echo 'Bye!';
    }
}

class MyBaseClass extends BaseClass
{
    use SayBye;
}

class MyFirstClass extends MyBaseClass
{
    use SayBye;

    public function sayGoodBye() {
        parent::sayGoodBye();
        echo 'Best Regards';
    }
}

$baseClass = new BaseClass(1);
$baseClass->save();
$baseClass->sayHello('First');
$baseClass->sayGoodBye();

echo PHP_EOL;

$myBaseClass = new MyBaseClass(1);
$myBaseClass->save();
$myBaseClass->sayHello('Second');
$myBaseClass->sayGoodBye();

echo PHP_EOL;

(new MyFirstClass(true))->save();
(new MyFirstClass(false))->sayHello('Mr. Anderson');
(new MyFirstClass(false))->sayGoodBye();

echo PHP_EOL;
