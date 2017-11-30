# Traits
[![Object Iteration](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.traits.php)

**Traits** are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies.

**Traits** permit a style of horizontal code sharing, as opposed to purely vertical code sharing.
*The main reason to use a trait over a standard inheritance model, i.e., to simply make a parent class with the shared methods and inherent from that similar parent class, is a lot of the time, you don't want all your classes to inherit from the same base class.*

### Good example why we have to use Traits

**Logging** is a typical example of where a trait's benefits are far greater than simply using standard inheritance. You need logging in probably a lot of your code, but not all of it, and you want to not have to rewrite the actual implementation details of how you log multiple times in your code base. So we have a standard model, view, controller application. Model talks to the database. View displays stuff to the end user, and the controller layer handles the coordination between these two other layers.

We want to log in most of our model classes and some of our controller classes, but our views, on the other hand, have essentially no need for any form of logging. Where would this type of code live? Traits are our answer in this case. Traits are reusable methods that can basically be loaded into any class and be used whenever we need them, simply by including that class.

### Precedence

An inherited member from a base class is overridden by a member inserted by a Trait. The precedence order is that members from the current class override Trait methods, which in turn override inherited methods.

*BaseClass -> Trait -> ChildClass*

### Multiple Traits

**Multiple Traits** can be inserted into a class by listing them in the use statement, separated by commas.
```php
class MyHelloWorld
{
    use Hello, World; // multiple traits
    public function sayExclamationMark()
    {
        echo 'Wow!';
    }
}
```

### Conflict Resolution

If two Traits insert a method with the same name, a fatal error is produced, if the conflict is not explicitly resolved.

To resolve naming conflicts between Traits used in the same class, the *insteadof* operator needs to be used to choose exactly one of the conflicting methods.

Since this only allows one to exclude methods, the *as* operator can be used to add an alias to one of the methods. Note the *as* operator does not rename the method and it does not affect any other method either.
```php
class Aliased_Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}
```

### Changing Method Visibility

Using the *as* syntax, one can also adjust the visibility of the method in the exhibiting class.
```php
class MyClass1 {
    use HelloWorld {
        sayHi as protected;
        sayHello as private myPrivateHello;
    }
}
```

### Traits Composed from Traits

Just as classes can make use of traits, so can other traits. By using one or more traits in a trait definition, it can be composed partially or entirely of the members defined in those other traits.
*So the other words, traits can use trait within themselves...*

### Abstract Trait Members

Traits support the use of **abstract methods** in order to impose requirements upon the exhibiting class.
*So the other words, you can use abstract method within trait instead of interface implementation*