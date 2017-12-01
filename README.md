# Abstract Classes
[![Object Iteration](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.abstract.php)

PHP 5 introduces **abstract classes** and **methods**. An **Abstract Class** provides a way for you to write a PHP class that defines both just *methods signatures without any implementation*, mixed with *methods that have both a full signature and the implementation provided*.

>**Keep in mind!** *Interfaces* are a way of shipping in pattern around in which *other people* must meet. It's a way of saying you must respect and implement these functions.
>On the other hand, an *abstract class gives you a way to say you must implement these methods.*

### REMEMBER!

- **Abstract classes** *may not be instantiated*.
- Any class that contains *at least one abstract method* must also be **abstract**.
- **Abstract Methods** simply declare the *method's signature* - they **cannot define the implementation**.
- When **inheriting** from an abstract class, all **methods marked abstract in the parent's** class declaration **must be defined** by the child. Additionally, these **methods** must be defined with the **same or a less restricted visibility**.
- The **signatures of the methods must match**, i.e. the type hints and the number of required arguments **must be the same**.

>*For example*, if the abstract method is defined as **protected**, the function implementation **must be defined as either protected or public**, but not private.
>*For example*, if the child class defines an optional argument, where the abstract method's signature does not, there is no conflict in the signature. This also applies to constructors as of PHP 5.4. Before 5.4 constructor signatures could differ.