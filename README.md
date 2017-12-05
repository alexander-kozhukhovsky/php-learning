# Static Keyword
[![Static Keyword](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.static.php)

Declaring class properties or methods as **static makes them accessible without needing an instantiation of the class**.

**REMEMBER!**
A *property declared as static cannot be accessed with an instantiated class object* (though a *static method can*).

Because static methods are callable without an instance of the object created, the **pseudo-variable $this is not available inside the method declared as static**.