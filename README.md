# Visibility
[![Visibility](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.visibility.php)

The *visibility* of a property, a method or (as of PHP 7.1.0) a constant can be defined *by prefixing the declaration with the keywords public, protected or private*.

- Class members declared **public can be accessed everywhere**.
- Members declared **protected** can be accessed only **within the class itself and by inheriting and parent classes**.
- Members declared as **private** may only be accessed **by the class that defines the member**.

>**NOTE:**
>By default undefined properties and methods are defined as public.