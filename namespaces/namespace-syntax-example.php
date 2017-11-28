<?php
namespace my\name; // defining namespace

class MyClass
{
    const MYCONST = 22;
}

function myfunction()
{}

const MYCONST = 'MyConst';

$first_class = new MyClass;
$second_class = new \my\name\MyClass;

echo "Constant from \$first_class - " . $first_class::MYCONST . "\n";
echo "Constant from \$second_class - " . $second_class::MYCONST . "\n";

$first_class = strlen('hi'); // see "Using namespaces: fallback to global

$first_class_constant = namespace\MYCONST; // see "namespace operator and __NAMESPACE__

echo "namespace\MYCONST - " . $first_class_constant . PHP_EOL;

$first_class_constant = __NAMESPACE__ . '\MYCONST';

echo "__NAMESPACE__ . '\MYCONST' - " . $first_class_constant . PHP_EOL; // echo my\name\MYCONST

echo "constant(__NAMESPACE__ . '\MYCONST') - " . constant($first_class_constant) . PHP_EOL; // see "Namespaces and dynamic language features" section
