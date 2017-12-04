# Closure
[![Object Iteration](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/class.closure.php)

### What is Closure?

**Closure** is an anonymous function. It's called an anonymous function because it's a function that doesn't have a name attached.

### The Closure class

This is a class used to represent anonymous functions. It gets returned internally when we create an anonymous function. So we actually return a reference to a behind-the-scenes created instance of the closure class.

A simpler way to think about the concept is a closure is a *callable class* similar to the *invoke concept*, but instead, **we bind the parameters manually as well as limit the scope to only itself**.

### Class synopsis

/* Methods */
*private* [__construct](http://php.net/manual/en/closure.construct.php) ( void )
*public static* Closure [bind](http://php.net/manual/en/closure.bind.php) ( Closure $closure , object $newthis [, mixed $newscope = "static" ] )
*public* Closure [bindTo](http://php.net/manual/en/closure.bindto.php) ( object $newthis [, mixed $newscope = "static" ] )
*public mixed* [call](http://php.net/manual/en/closure.call.php) ( object $newthis [, mixed $... ] )
*public static* Closure [fromCallable](http://php.net/manual/en/closure.fromcallable.php) ( callable $callable )

>Кроме методов, описанных здесь, этот класс также имеет метод **__invoke**. Данный метод необходим только для совместимости с другими классами, в которых реализован магический вызов, так как этот метод не используется при вызове функции.

### Closure Scope

When we talk about scope, we mean *the part of our code that a variable is valid and defined for*.

```php
$var = "closure";
$func = function() { echo "{$var} called"; };
echo $func(); // Notice - undefined variable: $var
```

In this case, if we try to use the variable **$var** in our closure, it's *undefined*. Why? Because a closure only has its own scope.

### Closure Parameters

You can **pass a variable** into a closure. You can add the variable to the function definition, much like you probably expect, and just pass it in.

```php
$var = "closure";
$funct = function($string) { echo "$string was called\n"; };
echo $funct($var); // everything is OK
```

What if we **don't want to pass a variable** in? What if, instead, **we want our closure to expand its scope**, to be able to peak out into the broader world of the rest of our code?

There's a keyword, the **use** keyword, that we can use to tell our closure *use this variable from our local scope and bind it to your scope*.

```php
$var = "closure";
$funct = function() use ($var) { echo "{$var} was called\n"; };
echo $funct(); // everything is OK
```

In essence, we **import the variable** for use **into the closure** itself.

>**NOTICE!** The variables passed in via the use is only by value and not by reference, so if your closure modifies the value of the variable being passed in via the use, it's not actually passed back.

```php
$var = "closure";
$funct = function() use ($var) { echo "{$var} was called\n"; $var = "changed closue"; };
echo $funct(); // everything is OK
echo $var; // shows closure
```

### What are Closures useful for?

- **Functional Programming** - programming in which you run typically mathematically oriented functions that do not change state or data.
- **Stategy Design Pattern** - is a pattern of selecting a function or the behavior of a function at run time. For example: *One-off functions*, *Stable reference to a function*, *Iterator libraries* and etc.