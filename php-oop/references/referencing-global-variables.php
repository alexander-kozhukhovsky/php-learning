<?php
$var1 = "Example variable";
$var2 = "";

function globalReferences($use_globals)
{
    global $var1, $var2;
    if (!$use_globals) {
        $var2 = &$var1; // visible only inside the function
        echo "(Without globals) Within function \$var2 = '$var2'\n";
    } else {
        $GLOBALS['var2'] = &$var1; // visible only in global context (outside function)
        echo "(With globals) Within function \$var2 = '$var2'\n"; // WHY $var2 is still empty?
    }
}

globalReferences(false);
echo "(Without globals) Outside function \$var2 = '$var2'\n"; // var2 is set to ''

globalReferences(true);
echo "(With globals) Outside function \$var2 = '$var2'\n"; // var2 is set to 'Example variable'
