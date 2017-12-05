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

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned будет иметь это значение';

$instance = null; // $instance и $reference становятся null

var_dump($instance);
var_dump($reference);
var_dump($assigned);

$reference->var = '$assigned будет иметь другое значение и выведет ошибку';
// Warning: Creating default object from empty value
// Will get such warning if $refernce = null or not initialized yet.
// Also You will get different errors if it was initialized to some value but is not an object
// To avoid - declare as an object of stdClass in the global namespace

var_dump($instance);
var_dump($reference);
var_dump($assigned);

$reference = new \stdClass();
$reference->var = '$assigned будет иметь другое значение и никакой ошибки';

var_dump($instance);
var_dump($reference);
var_dump($assigned);
