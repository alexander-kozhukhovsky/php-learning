<?php
function get_each_number()
{
    for ($i = 1; $i <= 22; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

$generator = get_each_number();
foreach ($generator as $value) { // gettin yields with foreach loop
    echo "$value\n";
}
