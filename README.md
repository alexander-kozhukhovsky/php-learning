# Late Static Bindings
[![Late Static Bindings](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.late-static-bindings.php)

This feature was named **"late static bindings"** with an internal perspective in mind. **"Late binding"** comes from the fact that *static::* will not be resolved using the class where the method is defined but it will rather be computed *using runtime information*. It was also called a **"static binding"** as it can be used for (but is not limited to) *static method calls*.

>**NOTE:**
>A **"forwarding call"** is a static one that is introduced by self::, parent::, static::, or, if going up in the class hierarchy, *forward_static_call()*.

### Limitations of self::

Static references to the current class like **self::** or **__CLASS__** are resolved using *the class in which the function belongs*, as in where it was defined.

### Late Static Bindings' usage

Late static bindings tries to solve that limitation by introducing an already reserved **static** keyword that references the class that was *initially called at runtime*.

```php
class A {
    public static function who()
    {
        echo __CLASS__;
    }
    public static function test()
    {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who()
    {
        echo __CLASS__;
    }
}

B::test(); // will return B
```

>**Note:**
>In non-static contexts, the called class will be the class of the object instance. Since $this-> will try to call private methods from the same scope, using static:: may give different results. Another difference is that static:: can only refer to static properties.