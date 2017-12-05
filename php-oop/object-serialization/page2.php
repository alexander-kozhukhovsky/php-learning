<?php
// this is needed for the unserialize to work properly.
include "classa.inc";

$serialized_class = file_get_contents('store');
$myclass = unserialize($serialized_class);

// now use the function show_one() of the $a object.
$myclass->show_one();
