<?php
function &countDown($value)
{
    while ($value > 0) {
        yield $value;
    }
}

foreach (countDown(10) as &$value) {
    echo "$value\n";
    $value--;
}