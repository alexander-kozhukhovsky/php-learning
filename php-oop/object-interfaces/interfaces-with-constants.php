<?php
interface a
{
    const B_CONST = 'Interface constant';
}

echo a::B_CONST . PHP_EOL; // constant will be showened

class B implements a
{
    // const B_CONST = 'Class constant'; // FATAL ERROR -- cannot override constant
    const OWN_CONST = "Own class constant";
}

echo B::B_CONST . PHP_EOL;
echo B::OWN_CONST . PHP_EOL;
