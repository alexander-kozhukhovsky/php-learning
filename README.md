# Magic Methods
[![Object Iteration](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.magic.php)

### What is a Magic Method?

Magic Methods are so called because they let you add magic to automatically happen whenever you interact with your PHP objects. Magic Methods are always prefixed with a __double underscore__.

**PHP recommends you do not write any method names with a __double underscore__, as PHP may, in the future, add new Magic Methods.**

### The function names
- [__construct()](http://php.net/manual/en/language.oop5.decon.php#object.construct)
- [__destruct()](http://php.net/manual/en/language.oop5.decon.php#object.destruct)
- [__call()](http://php.net/manual/en/language.oop5.overloading.php#object.call)
- [__callStatic()](http://php.net/manual/en/language.oop5.overloading.php#object.callstatic)
- [__get()](http://php.net/manual/en/language.oop5.overloading.php#object.get)
- [__set()](http://php.net/manual/en/language.oop5.overloading.php#object.set)
- [__isset()](http://php.net/manual/en/language.oop5.overloading.php#object.isset)
- [__unset()](http://php.net/manual/en/language.oop5.overloading.php#object.unset)
- [__sleep()](http://php.net/manual/en/language.oop5.magic.php#object.sleep)
- [__wakeup()](http://php.net/manual/en/language.oop5.magic.php#object.wakeup)
- [__toString()](http://php.net/manual/en/language.oop5.magic.php#object.tostring)
- [__invoke()](http://php.net/manual/en/language.oop5.magic.php#object.invoke) - when call object as a function.
- [__set_state()](http://php.net/manual/en/language.oop5.magic.php#object.set-state) - for classes exported by *var_export()*.
- [__clone()](http://php.net/manual/en/language.oop5.cloning.php#object.clone)
- [__debugInfo()](http://php.net/manual/en/language.oop5.magic.php#object.debuginfo)

**NOTE:** *These methods are magical in PHP classes. You cannot have functions with these names in any of your classes unless you want the magic functionality associated with them.*