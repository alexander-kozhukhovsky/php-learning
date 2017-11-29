<?php
interface CanTalk
{
    public function saySomething() : string; // specify string only!
}

abstract class Animal implements CanTalk
{
    public $legsNumber = self::NORMAL_LEGS_NUM;
    const NORMAL_LEGS_NUM = 4;
    const WHAT_TO_SAY = null;

    public function __construct($legsNumber = self::NORMAL_LEGS_NUM)
    {
        $this->legsNumber = $legsNumber;
    }

    public function saySomething() : string // specify string only!
    {
        return static::WHAT_TO_SAY; // позднее статическое связывание -- late static binding
        // return self::WHAT_TO_SAY; // Will allways show parent class constant
    }
}

class Cat extends Animal
{
    const WHAT_TO_SAY = "Meow!\n";
}

class Dog extends Animal
{
    const WHAT_TO_SAY = "Woof!\n";
}

class Train implements CanTalk
{
    public function saySomething() : string // specify string only!
    {
        return "CHOO-CHOO!\n";
    }
}

class Watcher
{
    public function searchSound(CanTalk $entity) : string // specify string only!
    {
        return $entity->saySomething();
    }
}

$cat     = new Cat();
$dog     = new Dog();
$train   = new Train();
$watcher = new Watcher();

echo $watcher->searchSound($cat);
echo $watcher->searchSound($dog);
echo $watcher->searchSound($train);
