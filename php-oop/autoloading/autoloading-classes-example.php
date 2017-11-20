<?php
spl_autoload_register(function ($class_name) {
    include $class_name . ".php";
});

$obj1 = new MyClass1();
$obj1->echoSomethingNew();

$obj2 = new MyClass2();
$obj2->echoSomethingNew();

$obj3 = new MyClass3();
$obj3->echoSomethingNew();
