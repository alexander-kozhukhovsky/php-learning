# Object Inheritance
[![Object Inheritance](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.inheritance.php)

**Inheritance** is a well-established programming *principle*, and PHP makes use of this principle in its object model. This principle will affect the way many classes and objects relate to one another.

*For example*, when you extend a class, the subclass inherits all of the public and protected methods from the parent class. Unless a class overrides those methods, they will retain their original functionality.

This is useful for *defining and abstracting functionality*, and *permits the implementation of additional functionality* in similar objects *without the need to reimplement* all of the shared functionality.

>**Note:**
>Unless autoloading is used, then **classes must be defined before they are used**. If a class extends another, then the **parent class must be declared before the child class** structure. This rule applies to classes that inherit other classes and interfaces.