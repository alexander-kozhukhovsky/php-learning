# Object Cloning
[![Object Cloning](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.cloning.php)

Creating a copy of an object with fully replicated properties *is not always the wanted behavior*.

>**Example:** your object holds a reference to another object which it uses and when you replicate the parent object you want to create a new instance of this other object so that the replica has its own separate copy.

### clone keyword

An object copy is created by using the **clone** keyword (*which calls the object's __clone() method if possible*). **An object's __clone() method cannot be called directly.**

```php
$copy_of_object = clone $object;
```

When an object is cloned, PHP will perform a *shallow copy* of all of the object's properties. *Any properties that are references to other variables will **remain references**.*

Once the cloning is complete, *if a **__clone()** method is defined*, then the newly created object's **__clone()** method will be called, to allow any necessary properties that need to be changed.