# Object Interfaces
[![Object Interfaces](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.interfaces.php)

**Object interfaces** allow you to create code which specifies *which methods a class must implement*, **without** having to define *how these methods are handled*.

Interfaces are defined in the same way as a class, but with the **interface** keyword replacing the class keyword and without any of the methods having their contents defined.

All methods declared in an interface **must be public**; this is the nature of an interface.

**Note** that it is possible to declare a **constructor** in an interface, what can be useful in some contexts, *e.g. for use by factories*.

### implements

To implement an interface, the **implements** operator is used. All methods in the interface must be implemented within a class; **failure** to do so will result in a **fatal error**. Classes may implement more than one interface if desired by separating each interface with a comma.

>**Note:**
>Prior to PHP 5.3.9, a class could not implement *two interfaces that specified a method with the same name*, since it would cause ambiguity. More recent versions of PHP allow this as long as the duplicate methods have the same signature.

### Constants

It's possible for interfaces to have constants. Interface constants works exactly like class constants except they **cannot be overridden by a class/interface that inherits them**.