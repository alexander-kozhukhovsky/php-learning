<?php

try {
    // processCC('2', 231513); // -- everything is ok!
    processCC();
} catch (Exception $e) {
    echo $e->getMessage() . " - ";
    echo get_class($e) . PHP_EOL;
    echo $e->getPrevious()->getMessage() . " - ";
    echo get_class($e->getPrevious()) . PHP_EOL;
}

function processCC(int $numb = null, int $zipCode = null)
{
    try {
        validate($numb, $zipCode);
    } catch (Exception $e) {
        throw new BadFunctionCallException("Invalid inputs", null, $e); // Exception - changed to BadFunctionCallException
    }
    echo "Well processed with \$numb = $numb and \$zipCode = $zipCode\n";
}

function validate($numb, $zipCode)
{
    if (is_null($numb)) {
        throw new InvalidArgumentException("No CC number"); // Exception - changed to InvalidArgumentException
    }
}
