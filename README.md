# Object Serialization
[![Object Serialization](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.serialization.php)

### Serializing objects - objects in sessions

[serialize()](http://php.net/manual/en/function.serialize.php) returns a string containing a *byte-stream representation of any value that can be stored in PHP*.

[unserialize()](http://php.net/manual/en/function.unserialize.php) can use this string to *recreate the original variable values*. Using serialize to save an object will save all variables in an object. The **methods in an object will not be saved**, only the name of the class.

**REMEMBER!**
In order to be able to [unserialize()](http://php.net/manual/en/function.unserialize.php) an object, the class of that object needs to be **defined**. That is, if you have an object of class A and serialize this, you'll get a string that refers to class A and contains all values of variables contained in it. If you want to be able to unserialize this in another file, an object of class A, the definition of class A must be present in that file first. This can be done for example by storing the class definition of class A in an include file and including this file or making use of the [spl_autoload_register()](http://php.net/manual/en/function.spl-autoload-register.php) function.

>**Note** that you can also hook into the serialization and unserialization events on an object using the __sleep() and __wakeup() methods. Using __sleep() also allows you to only serialize a subset of the object's properties.