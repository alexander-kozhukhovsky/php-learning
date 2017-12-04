# Exceptions
[![Exceptions](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.exceptions.php)

### What is exception?

Exceptions are a way to trigger an error state, or condition, in some part of our application, and let another part of our application handle that problem.

The thrown object must be an instance of the Exception class or a subclass of Exception. Trying to throw an object that is not will result in a PHP Fatal Error.

### Exception Flow

- Throw exception
- Cathc exception in a try/catch block
- Process and deal with exception
- Else program

>An exception can be **thrown**, and **caught** ("catched") within PHP. Code may be surrounded in a **try block**, to facilitate the catching of potential exceptions. **Each try must have at least one corresponding catch or finally block**.

**Remember!** When an exception is thrown, the code following it will not be executed, and PHP will try to find the matching "catch" block.
If an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.

## Exception Class

**The thrown object must be an instance of the [Exception class](http://php.net/manual/en/class.exception.php) or a subclass of Exception. Trying to throw an object that is not will result in a PHP Fatal Error.**

### Properties of Exception Class

- *protected string* $message ;
- *protected int* $code ;
- *protected string* $file ;
- *protected int* $line ;

### Methods of Exception Class

- *public* __construct ([ string $message = "" [, int $code = 0 [, Throwable $previous = NULL ]]] )
- *final public* string getMessage ( void )
- *final public* Throwable getPrevious ( void )
- *final public* mixed getCode ( void )
- *final public* string getFile ( void )
- *final public* int getLine ( void )
- *final public* array getTrace ( void )
- *final public* string getTraceAsString ( void )
- *public* string __toString ( void )
- *final* private void __clone ( void )

### [PHP SPL Exceptions](http://php.net/manual/en/spl.exceptions.php)

- [LogicException](http://php.net/manual/en/class.logicexception.php) - Exception that represents error in the program logic. This kind of exception should lead directly to a fix in your code. LogicException is a base for most of the other exceptions. Typically, you won't throw a logic exception directly. Instead you either create a new exception or throw one of its subclasses.
- [RuntimeException](http://php.net/manual/en/class.runtimeexception.php) - Exception thrown if an error which can only be found on runtime occurs. RuntimeException is the other base for the other exception classes. Again, you won't typically throw a direct runtime exception, but instead one of its subclassees.
- [BadFunctionCallException](http://php.net/manual/en/class.badfunctioncallexception.php) - Exception thrown if a callback refers to an undefined function or if some arguments are missing. This is an exception to handle an invalid call to a function. Typically, this is used in conjunction with an is callable function to say that a certain past function call is not actually callable.
- [BadMethodCallException](http://php.net/manual/en/class.badmethodcallexception.php) - Exception thrown if a callback refers to an undefined method or if some arguments are missing. This is an extension of the bad function call that instead of functions it's own method calls. In most cases, you'll want to use this when using the magic call method to deal with methods that do not exist or are uncallable for some reason.
- [InvalidArgumentException](http://php.net/manual/en/class.invalidargumentexception.php) - Exception thrown if an argument is not of the expected type.
- [LengthException](http://php.net/manual/en/class.lengthexception.php) - Exception thrown if a length is invalid. For instance, the length of a file name being too long or too short.
- [OutOfRangeException](http://php.net/manual/en/class.outofrangeexception.php) - Is similar to LengthException, except in this case you requested an illegal index, but this one typically occurs at compile time as opposed to runtime.
- [OutOfBoundsException](http://php.net/manual/en/class.outofboundsexception.php) - Exception thrown if a value is not a valid key. This represents errors that cannot be detected at compile time.
- [OverflowException](http://php.net/manual/en/class.overflowexception.php) - is when you add an element to a container that's already full. You get an OverflowException.
- [RangeException](http://php.net/manual/en/class.rangeexception.php) - Exception thrown to indicate range errors during program execution. Normally this means there was an arithmetic error other than under/overflow. This is the runtime version of DomainException where the issue with a value can only be detected at runtime.
- [DomainException](http://php.net/manual/en/class.domainexception.php) - is used to handle a set of values that does not match whatever domain you are working with. Exception thrown if a value does not adhere to a defined valid data domain.
- [UnderflowException](http://php.net/manual/en/class.underflowexception.php) - Exception thrown when performing an invalid operation on an empty container, such as removing an element. This is the exact opposite of an OverflowException. In this case, rather than adding too many elements to a container, we try to remove an element from an already empty container.
- [UnexpectedValueException](http://php.net/manual/en/class.unexpectedvalueexception.php) - is raised when you have a function call that is dealing with a value that it wasn't supposed to deal with. Typically, this occurs when a function called Foo has as one of its input another function called Bar and Bar returns an invalid type for Foo to fail on processing. Notice this is a *nested exception*.

### Most Common Exceptions

- [BadMethodCallException](http://php.net/manual/en/class.badmethodcallexception.php)
- [InvalidArgumentException](http://php.net/manual/en/class.invalidargumentexception.php)
- [BadFunctionCallException](http://php.net/manual/en/class.badfunctioncallexception.php)