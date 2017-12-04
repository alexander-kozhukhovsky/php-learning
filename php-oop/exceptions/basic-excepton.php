<?php
// create function with exception
function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

// ATTENTION!!! THIS WILL NOT WORK!!!

// trigger exception
// checkNum(1); // PHP Fatal error:  Uncaught Exception: Value must be 1 or below
// checkNum(2); // PHP Fatal error:  Uncaught Exception: Value must be 1 or below

// Proper exception code should include:

// Try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal.
// However if the exception triggers, an exception is "thrown"
// Throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
// Catch - A "catch" block retrieves an exception and creates an object containing the exception information

// THIS WILL WORK!

// trigger exception in a "try" block
try {
    checkNum(1);
    echo "If you see this, the number is 1 or below\n";
} catch (Exception $e) {
    echo 'Custom Message: ' . $e->getMessage() . PHP_EOL;
}
