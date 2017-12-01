# Generators
[![Generators](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.generators.php)

## Table of contents

- [Generators overview](http://php.net/manual/en/language.generators.overview.php)
- [Generator syntax](http://php.net/manual/en/language.generators.syntax.php)
- [Comparing generators with Iterator objects](http://php.net/manual/en/language.generators.comparison.php)

### Generators overview

**Generators** provide an easy way to implement simple [iterators](http://php.net/manual/en/language.oop5.iterations.php) without the overhead or complexity of implementing a class that implements the [Iterator interface](http://php.net/manual/en/class.iterator.php).

Other words, generators is a routine that is designed to control the iteration behavior of a loop.

When a **generator function** is called, it returns an object that can be iterated over. When you iterate over that object (for instance, via a foreach loop), PHP will call the generator function each time it needs a value, then saves the state of the generator when the generator yields a value so that it can be resumed when the next value is required.

### YIELD keyword

The heart of a generator function is the **yield** keyword. In its simplest form, a yield statement looks much like a return, except rather than stopping the execution of the loop, *only pauses it for some operation to occur*.