<?php
include("classa.inc");

$myclass = new ClassToSerialize;
$serialized_class = serialize($myclass);
echo $serialized_class . PHP_EOL;
// store $s somewhere where page2.php can find it.
file_put_contents('store', $serialized_class);
