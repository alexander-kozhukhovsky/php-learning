# Anonymous Classes
[![Anonymous Classes](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.anonymous.php)

### Anonymous classes

Support for anonymous classes was added in **PHP 7**. Anonymous classes are useful when simple, one-off objects need to be created.

They can *pass arguments* through to their constructors, *extend* other classes, *implement* interfaces, and *use traits* just like a normal class can.

### Access to private and protected methods and properties

**Nesting an anonymous class within another class does not give it access to any private or protected methods or properties of that outer class.** In order to use the outer class' **protected properties** or methods, *the anonymous class can extend the outer class*. To use the **private properties** of the outer class in the anonymous class, they *must be passed through its constructor*.

**REMEMBER!** All objects created by the same anonymous class declaration are instances of that very class.

>**Note:**
>Note that anonymous classes are assigned a name by the engine, as demonstrated in the following example. This name has to be regarded an implementation detail, which should not be relied upon.