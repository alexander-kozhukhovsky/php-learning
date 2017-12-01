<?php
function fibonacci($position = 1)
{
    $last = 0;
    $current = 1;
    yield 1; // without "=" !!!
    $i = 0;
    while ($i < $position) {
        $current = $last + $current;
        $last = $current - $last;
        yield $current;
        $i++;
    }
    return; // will exit generator
}

foreach (fibonacci(22) as $value) {
    echo "$value\n";
}
