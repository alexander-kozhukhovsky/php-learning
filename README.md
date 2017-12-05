# Type declarations
[![Type declarations](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration)

**Type hints, or type declarations** as that is how the PHP manual refers to them, are hints to the programmer, and to the PHP runtime, that I require something that corresponds to a particular type.

**Type declarations** allow functions *to require that parameters are of a certain type at call time*. If the given value is of the incorrect type, then an error is generated

>**Note:**
>Type declarations were also known as type hints in PHP 5.

### Valid Types

- Class/interface name - The parameter must be an [instanceof](http://php.net/manual/en/language.operators.type.php) the given class or interface name
- self - The parameter must be an [instanceof](http://php.net/manual/en/language.operators.type.php) the same class as the one the method is defined on. This can only be used on class and instance methods
- array - The parameter must be an [array](http://php.net/manual/en/language.types.array.php)
- callable - The parameter must be a valid [callable](http://php.net/manual/en/language.types.callable.php)
- bool - The parameter must be a [boolean](http://php.net/manual/en/language.types.boolean.php) value
- float - The parameter must be a [floating](http://php.net/manual/en/language.types.float.php) point number
- int - The parameter must be an [integer](http://php.net/manual/en/language.types.integer.php)
- string - The parameter must be a [string](http://php.net/manual/en/language.types.string.php)
- iterable - The parameter must be either an [array](http://php.net/manual/en/language.types.array.php) or an [instanceof Traversable](http://php.net/manual/en/class.traversable.php)