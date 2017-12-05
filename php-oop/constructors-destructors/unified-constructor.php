<?php
class BaseClass
{
    function __construct()
    {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass
{
    // inherits BaseClass's constructor
}

$obj = new BaseClass(); // In BaseClass constructor

$obj = new SubClass(); // In BaseClass constructor // In SubClass constructor

$obj = new OtherSubClass(); // In BaseClass constructor
