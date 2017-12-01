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

Except that instead of *returning once*, a *generator can yield as many times as it needs* to in order to provide the values to be iterated over.

### Yield keyword

The heart of a generator function is the **yield** keyword. In its simplest form, a yield statement looks much like a return, except rather than stopping the execution of the loop, *only pauses it for some operation to occur*.

### Yielding values with keys

**Generators** supports *associative arrays*.

### Yield by reference

Performed the same way you yield a return from a function, *prepending an ampersand*, to the front of the generator function.

### Yielding null values

Yield can be called without an argument to yield a **NULL value** with an automatic key.

### Comparing generators with [Iterator](http://php.net/manual/en/language.oop5.iterations.php) objects

The primary advantage of generators is their *simplicity*. Much less boilerplate code has to be written compared to implementing an Iterator class, and the code is generally much more readable.

This flexibility does come at a cost, however: *generators are forward-only iterators*, and **cannot be rewound once iteration has started**. This also means that the same generator can't be iterated over multiple times: **the generator will need to be rebuilt by calling the generator function again**.