# Overloading
[![Overloading](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.overloading.php)

Overloading in PHP provides means to **dynamically "create" properties and methods**. These dynamic entities are processed via *magic methods* one can establish in a class for various action types.

The overloading methods are invoked when interacting with properties or methods that *have not been declared or are not visible* in the current scope. The rest of this section will use the terms "inaccessible properties" and "inaccessible methods" to refer to this combination of declaration and visibility.

**REMEMBER!** All overloading methods must be defined as **public**.

>**Note:**
>None of the arguments of these magic methods can be passed by reference.

### Property Overloading

- [__set()](http://php.net/manual/en/language.oop5.overloading.php#object.set) is run when **writing data to** *inaccessible properties*.
- [__get()](http://php.net/manual/en/language.oop5.overloading.php#object.get) is utilized for **reading data from** *inaccessible properties*.
- [__isset()](http://php.net/manual/en/language.oop5.overloading.php#object.isset) is triggered by calling **isset()** or **empty()** on *inaccessible properties*.
- [__unset()](http://php.net/manual/en/language.oop5.overloading.php#object.unset) is invoked when **unset()** is used on *inaccessible properties*.

### Method Overloading

- [__call()](http://php.net/manual/en/language.oop5.overloading.php#object.call) is triggered when **invoking *inaccessible methods* in an object context**.
- [__callStatic()](http://php.net/manual/en/language.oop5.overloading.php#object.callstatic) is triggered when **invoking *inaccessible methods* in a static context**.