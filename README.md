# The Basics
[![PHP OOP Basics](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.basic.php)

A class may contain its own [constants](http://php.net/manual/en/language.oop5.constants.php), [variables](http://php.net/manual/en/language.oop5.properties.php) (called "properties"), and functions (called "methods").

### class

Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

The class name can be any valid label, provided it is not a PHP reserved word. A valid class name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thus: ^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$.

### $this

The *pseudo-variable* **$this** is available when a method is called from *within an object context*. **$this** is a reference to the calling object (usually the object to which the method belongs, but possibly another object, if the method is called statically from the context of a secondary object).
As of PHP 7.0.0 calling a non-static method statically from an incompatible context results in $this being undefined inside the method. Calling a non-static method statically from an incompatible context has been deprecated as of PHP 5.6.0. As of PHP 7.0.0 calling a non-static method statically has been generally deprecated (even if called from a compatible context). Before PHP 5.6.0 such calls already triggered a strict notice.

### new

To create an *instance of a class*, the **new** keyword must be used. An object will always be created *unless the object has a constructor defined that throws an exception on error*. Classes should be defined before instantiation (and in some cases this is a requirement).

If a string containing the name of a class is used with new, a new instance of that class will be created. If the class is in a namespace, its fully qualified name must be used when doing this.

### Properties and methods

Class properties and methods live in separate "namespaces", so *it is possible to have a property and a method with the same name*. Referring to both a property and a method has the same notation, and whether a property will be accessed or a method will be called, solely depends on the context, i.e. whether the usage is a variable access or a function call.

### extends

A class can inherit the methods and properties of another class by using the keyword **extends** in the class declaration. *It is not possible to extend multiple classes; a class can only inherit from one base class.*

The inherited methods and properties can be overridden by redeclaring them with the same name defined in the parent class. *However, if the parent class has defined a method as final, that method may not be overridden.* It is possible to access the overridden methods or static properties by referencing them with **parent::**.

When overriding methods, the parameter signature should remain the same or PHP will generate an E_STRICT level error. This does not apply to the constructor, which allows overriding with different parameters.

### ::class

Since PHP 5.5, the class keyword is also used for class name resolution. You can get a string containing the fully qualified name of the ClassName class by using ClassName::class. This is particularly useful with namespaced classes.

>**Note:**
>The class name resolution using ::class is a compile time transformation. That means at the time the class name string is created no autoloading has happened yet. As a consequence, class names are expanded even if the class does not exist. No error is issued in that case.