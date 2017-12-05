<?php
class SimpleClass
{
    // объявление свойства -- class property
    public $var = "default\n";

    //объявдение метода -- method
    public function displayVar()
    {
        echo $this->var;
    }
}

class ExtendClass extends SimpleClass
{
    // переопределение метода родителя
    function displayVar()
    {
        echo "Расширенный класс\n";
        parent::displayVar(); // вызов родительского метода без изменений
    }
}

$extended = new ExtendClass();
$extended->displayVar();