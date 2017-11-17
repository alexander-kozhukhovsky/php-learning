<?php
class SimpleClass
{
    // объявление свойства -- class property
    public $var = 'default';

    //объявдение метода -- method
    public function displayVar()
    {
        echo $this->var;
    }
}

$instance = new SimpleClass();
$instance->displayVar(); // default

// Это же МОЖНО сделать с помощью переменной

$className = 'SimpleClass';
$instance = new $className; // == new SimpleClass();
$instance->displayVar(); // default
