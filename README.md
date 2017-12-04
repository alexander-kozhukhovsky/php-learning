# Constructors and Destructors
[![Constructors and Destructors](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.decon.php)

### Constructor

```php
void __construct ([ mixed $args = "" [, $... ]] )
```

PHP 5 allows developers to declare constructor methods for classes. Classes which have a constructor method call this method on *each newly-created object*, so it is suitable for any initialization that the object may need before it is used.

>**Note:** Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, *a call to **parent::__construct()** within the child constructor is required*. If the child does not define a constructor then it may be inherited from the parent class just like a normal class method (if it was not declared as private).

### Destructor

```php
void __destruct ( void )
```

PHP 5 introduces a destructor concept similar to that of other object-oriented languages. The **destructor method** will be called as soon as there are no other references to a particular object, or in any order during the shutdown sequence.

Like constructors, parent destructors will not be called implicitly by the engine. In order to run a parent destructor, one would have to explicitly call **parent::__destruct()** in the destructor body. Also like constructors, a child class may inherit the parent's destructor if it does not implement one itself.

**REMEMBER!** The destructor will be called even if script execution is stopped using **exit()**. *Calling exit() in a destructor will prevent the remaining shutdown routines from executing.*

>**Note:**
>Destructors called during the script shutdown have HTTP headers already sent. The working directory in the script shutdown phase can be different with some SAPIs (e.g. Apache).

>**Note:**
>Attempting to throw an exception from a destructor (called in the time of script termination) causes a **fatal error**.