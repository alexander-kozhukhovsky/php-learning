<?php
class Foo
{
    private static $used;
    private $id;
    public function __construct()
    {
        $id = $used++;
    }
    public function __clone()
    {
        $id = $used++;
    }
}

$a = new Foo;   // $a is a pointer pointing to Foo object 0
$b = $a;        // $b is a pointer pointing to Foo object 0, however, $b is a copy of $a
$c = &$a;       // $c and $a are now references of a pointer pointing to Foo object 0
$a = new Foo;   // $a and $c are now references of a pointer pointing to Foo object 1, $b is still a pointer pointing to Foo object 0
unset($a);      // A reference with reference count 1 is automatically converted back to a value. Now $c is a pointer to Foo object 1
$a = &$b;       // $a and $b are now references of a pointer pointing to Foo object 0
$a = null;      // $a and $b now become a reference to NULL. Foo object 0 can be garbage collected now
unset($b);      // $b no longer exists and $a is now NULL
$a = clone $c;  // $a is now a pointer to Foo object 2, $c remains a pointer to Foo object 1
unset($c);      // Foo object 1 can be garbage collected now.
$c = $a;        // $c and $a are pointers pointing to Foo object 2
unset($a);      // Foo object 2 is still pointed by $c
$a = &$c;       // Foo object 2 has 1 pointers pointing to it only, that pointer has 2 references: $a and $c;
const ABC = true;
if (ABC) {
    $a = null;  // Foo object 2 can be garbage collected now because $a and $c are now a reference to the same NULL value
} else {
    unset($a);  // Foo object 2 is still pointed to $c
}
