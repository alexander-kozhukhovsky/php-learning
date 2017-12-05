<?php
$ref = 0;
$row = &$ref;
foreach (array(1, 2, 3, 100, 'string') as $row) {
    echo $row . PHP_EOL;
}
echo "\$ref = $ref\n"; // will be the same as last array item
