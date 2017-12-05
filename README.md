# Objects and references
[![Objects and references](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.references.php)

One of the key-points of PHP 5 OOP that is often mentioned is that **"objects are passed by references by default"**. This **is not completely true**.

A **PHP reference is an alias**, which *allows two different variables to write to the same value*. As of PHP 5, an object variable doesn't contain the object itself as value anymore. It only contains an object identifier which allows object accessors to find the actual object. *When an object is sent by argument, returned or assigned to another variable, the different variables are not aliases: they hold a copy of the identifier, which points to the same object.*