<?php
namespace App;

include "project.php";
use Project\table as ProjectTable; // class names conflict

class Table
{
    public static function get()
    {
        echo "App.Table.Get\n";
    }
}
ProjectTable::get();
