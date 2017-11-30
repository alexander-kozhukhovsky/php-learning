# Iterators
[![Object Iteration](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.iterations.php)

PHP provides a way for objects to be defined so it is possible to iterate through a list of items, with, for example a **__foreach__** statement. By default the **__foreach__** iterates through all of the visible properties that could be accessed.

To take it a step further, the **__Iterator interface__** may be implemented. This allows the object to dictate how it will be iterated and what values will be available on each iteration.

### What is an iterator?

The standard definition of an **__iterator__** is an object that enables you to *traverse* a container.
In essence, an iterator gives us the ability to perform a standard foreach loop over a collection of objects in a programmatic and fast manner.

### Examples when use Iterators

- Multiple foreach loops
- Series of tasks
- Pipeline of work

### Iterator often used methods ([Iterator interface](http://php.net/manual/en/class.iterator.php))

- abstract public mixed **__curren__** (void)
- abstract public scalar **__key__** (void)
- abstract public void **__next__** (void)
- abstract public void **__rewind__** (void)
- abstract public boolean **__valid__** (void)

*To Filter -> Organize -> Calcualate*

### Stacking Iterators

- Data manipulation
- Calculations
- Data filtering
- Data buffering
- Manu more ...

### What can be used?

- [Iterator interface](http://php.net/manual/en/class.iterator.php)
- [IteratorAggregate interface](http://php.net/manual/en/class.iteratoraggregate.php)
- [IteratorIterator class](http://php.net/manual/en/class.iteratoriterator.php)

>The **__IteratorAggregate interface__** can be used as an alternative to implementing all of the Iterator methods.
>IteratorAggregate only requires the implementation of a single method, **__IteratorAggregate::getIterator()__**, which should return an instance of a class implementing Iterator.

### SPL Iterators

- [IteratorIterator](http://php.net/manual/en/class.iteratoriterator.php) - is the Iterator Iterator, which wraps anything that implements the traversable iterator interface into an iterator. This is one of the most common starting iterators.
- [FilterIterator](http://php.net/manual/en/class.filteriterator.php) - this one adds an accept method that we can use to reject or include values in our iterator pipeline for further processing.
- [ArrayIterator](http://php.net/manual/en/class.arrayiterator.php) - it takes an array and turns it into an iterator. It has a host of methods that are available to duplicate some of the functionality from an array to be useful with an iterator. Such as, sorting by key and checking if an offset exists.
- [DirectoryIterator](http://php.net/manual/en/class.directoryiterator.php) - File System Iterator extends this to provide an iterator that loops over the contents of a directory and returns a new SPL file object for each item in the directory. Whereas Directory Iterator returns the Directory Iterator instance for each item in the directory itself. Many of the SPL iterators have a recursive extension to them and Recursive Directory Iterator is our first version of this.
- [RecursiveDirectoryIterator](http://php.net/manual/en/class.recursivedirectoryiterator.php) - acts like the File System Iterator but will recurse through a directory structure. So we can use this iterator to, for instance, scan a directory tree looking for something, stack it with the Filter Iterator to shortcut as needed when you can ignore part of a particular directory.
- [InfiniteIterator](http://php.net/manual/en/class.infiniteiterator.php) - will never stop looping over the contents of the iterator. Whenever it hits the end of the collection, it will just hit rewind and start back up. This is useful in cases where you might want to reduce a collection to a single value.
- [LimitIterator](http://php.net/manual/en/class.limititerator.php) - permits you to iterate over a subcollection of items in your iterator. Want to grab the first two thousand items in a collection and perform some operation before moving on? This iterator will let you solve that particular problem.
- [RecursiveIteratorIterator](http://php.net/manual/en/class.recursiveiteratoriterator.php) - is an iterator designed to walk through iterators recursively. So you have a collection of data that has trialed information. For instance, related records that then need to be accessed and filtered and processed.
- [CallbackFilterIterator](http://php.net/manual/ru/class.callbackfilteriterator.php) - this iterator permits you to pass a callback that performs the filtering for your iterator. This type of callback filter iterator is commonly used in any packages or libraries that wrap up using iterators to provide access to collections of data.
- [Many more...](http://php.net/manual/en/spl.iterators.php)