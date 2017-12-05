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

$letsUseClass = new SimpleClass();
$letsUseClass->var = 'not default';
$letsUseClass->displayVar();
