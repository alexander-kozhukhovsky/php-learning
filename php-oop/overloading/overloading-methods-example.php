<?php
class MethodTest
{
    public function __call($name, $arguments) // must be public
    {
        // check if argument list is multidimentional
        if (!$this->isMultiArray($arguments)) {
            // value of $name is case sensitive
            echo "Calling object method '$name' with arguments: " . implode(', ', $arguments) . "\n";
        } else {
            // value of $name is case sensitive
            echo "Calling object method '$name' with multidimensional arguments array\n";
        }
    }

    public static function __callStatic($name, $arguments) // must be public and static
    {
        // check if argument list is multidimentional
        if (!self::isMultiArray($arguments)) {
            // value of $name is case sensitive
            echo "Calling static method '$name' with arguments: " . implode(', ', $arguments) . "\n";
        } else {
            // value of $name is case sensitive
            echo "Calling static method '$name' with multidimensional arguments array\n";
        }
    }

    private function isMultiArray(array $array)
    {
        foreach ($array as $item_array) {
            if (is_array($item_array)) {
                return true;
            }
        }
        return false;
    }
}

$array = array('first', 'second', 'third'); // create array for test

$obj = new MethodTest;

$obj->runTest($array, 'next attribute', 'one more attribute');

$obj->runAnotherFunction('Wow', 'next attribute', 'one more attribute');

MethodTest::runTest($array);
