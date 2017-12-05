<?php
trait PropertiesTraitOne
{
    public $x = 1; // property
}

trait PropertiesTraitTwo
{
    public $same = true;
    public $different = false;
}

class PropertiesExample
{
    use PropertiesTraitOne, PropertiesTraitTwo;
    public $same = true; // Allowed as of PHP 7.0.0; E_STRICT notice formerly
    public $different = true; // Cannot not use properies with same name (otherwise it indentical with visibility and declaration)
}

$example = new PropertiesExample();
$example->x;
