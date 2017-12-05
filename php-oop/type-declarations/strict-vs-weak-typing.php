<?php
// declare (strict_types = 1); // will cause error on line 10 when enabled

function sum(int $a, int $b)
{
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum(1.9, 2.9)); // IF STRICT TYPE ENABLED! Argument 1 passed to sum() must be of the type integer, float given
// coerced to integers
