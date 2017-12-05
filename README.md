# Scope Resolution Operator (::)
[![Scope Resolution Operator](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.paamayim-nekudotayim.php)

The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon, is a token that allows access to static, constant, and overridden properties or methods of a class.

When referencing these items from outside the class definition, use the name of the class.

>**NOTE!**
>**Paamayim Nekudotayim** would, at first, seem like a strange choice for naming a double-colon. However, while writing the Zend Engine 0.5 (which powers PHP 3), that's what the Zend team decided to call it. It actually does mean double-colon - in Hebrew!

### Useage

Three special keywords **self**, **parent** and **static** are used to access properties or methods from inside the class definition.

When an extending class overrides the parents definition of a method, PHP will not call the parent's method. It's up to the extended class on whether or not the parent's method is called. This also applies to Constructors and Destructors, Overloading, and Magic method definitions.