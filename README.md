# Properties
[![Properties](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.properties.php)

Class member variables are called **properties**. They are defined by using one of the keywords *public*, *protected*, or *private*, followed by a normal variable declaration (see [Visibility for more information](http://php.net/manual/en/language.oop5.visibility.php)).

### Access

Within class methods *non-static properties* may be accessed by using **->** (Object Operator): **$this->property** (where property is the name of the property).

*Static properties* are accessed by using the **::** (Double Colon): **self::$property**. See [Static Keyword](http://php.net/manual/en/language.oop5.static.php) for more information on the difference between static and non-static properties.

### $this

The pseudo-variable **$this** is available *inside any class method* when that method is called *from within an object context*. **$this is a reference to the calling object** (usually the object to which the method belongs, but possibly another object, if the method is called statically from the context of a secondary object).

>**NOTE!**
>As of PHP 5.3.0 *heredocs* and *nowdocs* can be used in any static data context, including property declarations.