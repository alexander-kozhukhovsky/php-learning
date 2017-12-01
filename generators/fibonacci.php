<?php
function fibonacci($position = 1)
{
    $last = 0;
    $current = 1;
    $i = 0;
    yield $i => 1; // changed for array output
    while ($i < $position) {
        $current = $last + $current;
        $last = $current - $last;
        $i++;
        yield $i => $current; // changed for array output
    }
    return; // will exit generator
}

foreach (fibonacci(22) as $key => $value) { // changed for array output
    echo "{$key} => {$value}\n";
}
