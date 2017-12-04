# Autoloading Classes
[![Autoloading Classes](http://php.net/images/logos/php-med-trans.png)](http://php.net/manual/en/language.oop5.autoload.php)

Having to write a long list of needed includes at the beginning of each script this is no longer necessary. The [spl_autoload_register()](http://php.net/manual/en/function.spl-autoload-register.php) function registers any number of autoloaders, enabling for classes and interfaces to be automatically loaded if they are currently not defined. *By registering autoloaders, PHP is given a last chance to load the class or interface before it fails with an error.*

>**Note:**
>Autoloading is not available if using PHP in CLI interactive mode.