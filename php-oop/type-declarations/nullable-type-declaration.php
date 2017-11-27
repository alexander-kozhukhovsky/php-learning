<?php
class BaseClass
{
}

function myFunction(BaseClass $n = null)
{
    var_dump($n);
    echo PHP_EOL;
}

myFunction(new BaseClass);
myFunction(null);
