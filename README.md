# Comparing Objects
[![Comparing Objects](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.object-comparison.php)

When using the comparison operator **==**, object variables are compared in a simple manner, namely: *Two object instances are equal if they have the same attributes and values (values are compared with ==), and are instances of the same class*.

When using the identity operator **===**, object variables are *identical if and only if they refer to the same instance of the same class*.

>**Note:**
>Extensions can define own rules for their objects comparison (==).