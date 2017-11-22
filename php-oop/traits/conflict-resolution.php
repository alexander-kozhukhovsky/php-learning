<?php
trait A
{
    public function smallTalk()
    {
        echo "a\n";
    }

    public function bigTalk()
    {
        echo "A\n";
    }
}

trait B
{
    public function smallTalk()
    {
        echo "b\n";
    }

    public function bigTalk()
    {
        echo "B\n";
    }
}

class Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

$talker = new Talker();
$talker->smallTalk();
$talker->bigTalk();

class Aliased_Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

$aliased_talker = new Aliased_Talker();
$aliased_talker->smallTalk();
$aliased_talker->bigTalk();
$aliased_talker->talk();
