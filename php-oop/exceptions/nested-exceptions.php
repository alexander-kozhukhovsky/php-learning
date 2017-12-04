<?php
try {
    // processCC('2', 231513); // -- everything is ok!
    processCC();
} catch (Exception $e) {
    echo $e->getMessage();
    echo $e->getPrevious()->getMessage();
}

function processCC(int $numb = null, int $zipCode = null)
{
    try {
        validate($numb, $zipCode);
    } catch (Exception $e) {
        throw new Exception("Invalid inputs\n", null, $e);
    }
    echo "Well processed with \$numb = $numb and \$zipCode = $zipCode\n";
}

function validate($numb, $zipCode)
{
    if (is_null($numb)) {
        throw new Exception("No CC number\n");
    }
}
