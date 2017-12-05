<?php
class InvalidCCNumberException extends InvalidArgumentException
{
    public function __construct($message = 'No CC number', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
try {
    //processCC(); - No CC number - InvalidCCNumberException - Finally!
    processCC(22, '231513'); // Well processed with $numb = 22 and $zipCode = 231513 - Finally!
} catch (InvalidCCNumberException $e) {
    echo $e->getMessage() . " - ";
    echo get_class($e) . PHP_EOL;
} finally {
    echo "Finally!\n";
}

function processCC(int $numb = null, int $zipCode = null)
{
    try {
        validate($numb, $zipCode);
    } catch (Exception $e) {
        throw $e;
    }
    echo "Well processed with \$numb = $numb and \$zipCode = $zipCode\n";
}

function validate($numb, $zipCode)
{
    if (is_null($numb)) {
        throw new InvalidCCNumberException();
    }
}
