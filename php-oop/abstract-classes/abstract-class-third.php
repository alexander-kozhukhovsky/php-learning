<?php
abstract class Database
{
    public function __construct()
    {
        $this->connection();
    }

    abstract public function connection();

    public function disconnect()
    {
        echo "Was disconnected!\n";
    }
}

class MySql extends Database
{
    public function connection()
    {
        echo "Was connected!\n";
    }
}

(new MySql)->disconnect();