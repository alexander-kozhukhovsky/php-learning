<?php
class MyException extends Exception
{
    // Переопределим исключение так, что параметр message станет обязательным
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        // Any code
        parent::__construct($message, $code, $previous);
    }

    // Переопределим строковое представление объекта.
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function customFunction()
    {
        echo "This message is created within extential class\n";
    }
}

// CLASS FOR TESTING EXCEPTIONS
class TestException
{
    public $var;

    const THROW_NONE = 0;
    const THROW_CUSTOM = 1;
    const THROW_DEFAULT = 2;

    function __construct($avalue = self::THROW_NONE)
    {
        switch ($avalue) {
            case self::THROW_CUSTOM:
                // YOUR EXCEPTION
                throw new MyException('1 - недопустимый параметр', 5); // message and code number
                break;

            case self::THROW_DEFAULT:
                // DEFAULT EXCEPTION
                throw new Exception('2 - недопустимый параметр', 6); // message and code number
                break;

            default:
                // THERE IS NO EXCEPTIONS
                $this->var = $avalue;
                break;
        }
    }
}

function showFromWhereToContinue($class_variable = null)
{
    echo "\n";
    echo "Отсюда (строка " . __LINE__ . ") будет продолжено выполнение программы.";
    if (isset($class_variable)) {
        var_dump($class_variable); // null
    }
    echo "\n\n";
}

// Example 1
try {
    $example1 = new TestException(TestException::THROW_CUSTOM);
} catch (MyException $e) {      // Will be caught
    echo "Поймано собственное переопределенное исключение\n", $e;
    $e->customFunction();
} catch (Exception $e) {        // Будет пропущено.
    echo "Поймано встроенное исключение\n", $e;
}

showFromWhereToContinue($example1);

// Example 2
try {
    $example2 = new TestException(TestException::THROW_DEFAULT);
} catch (MyException $e) {      // Тип исключения не совпадет
    echo "Поймано переопределенное исключение\n", $e;
    $e->customFunction();
} catch (Exception $e) {        // Будет перехвачено
    echo "Поймано встроенное исключение\n", $e;
}

showFromWhereToContinue($example2);

// Example 3
try {
    $example3 = new TestException(TestException::THROW_CUSTOM);
} catch (Exception $e) {        // Будет перехвачено.
    echo "Поймано встроенное исключение\n", $e;
}

showFromWhereToContinue($example3);


// Example 4
try {
    $example4 = new TestException();
} catch (Exception $e) {        // Будет пропущено, т.к. исключение не выбрасывается
    echo "Поймано встроенное исключение\n", $e;
}

showFromWhereToContinue($example4);
