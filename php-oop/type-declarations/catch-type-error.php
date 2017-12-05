<?php
declare (strict_types = 1);

function sum(int $a, int $b)
{
    return $a + $b;
}

try {
    var_dump(sum(1, 2));
    var_dump(sum(1.5, 2.5));
} catch (TypeError $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
} finally {
    echo "Whatever You want!\n";
}
