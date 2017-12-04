# Class Constants
[![Class Constants](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.constants.php)

It is possible to define constant values on a per-class basis remaining the same and unchangeable. Constants differ from normal variables in that you **don't use the $ symbol** to declare or use them.

The default visibility of class constants is **public**.

The value must be **a constant expression**, not (for example) a variable, a property, or a function call.

*It's also possible for interfaces to have constants. Look at the [interface](http://php.net/manual/en/language.oop5.interfaces.php) documentation for examples.*

As of PHP 5.3.0, it's possible to reference the class using a variable. **The variable's value can not be a keyword (e.g. self, parent and static).**

>**Note:** that class constants are allocated once per class, and not for each class instance.

*The special **::class constant** are available as of PHP 5.5.0, and allows for fully qualified class name resolution at compile, this is useful for namespaced classes:*

```php
namespace foo {
    class bar
    {}

    echo bar::class; // foo\bar
}
```