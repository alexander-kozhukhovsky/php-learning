<?php
declare (encoding = 'UTF-8'); // No PHP code may exist outside of the namespace brackets except for an opening declare statement.

namespace MyProjectus {

    const CONNECT_OK = 1;

    class Connection
    {
        public function start()
        {
            return "Starting system\n";
        }
    }

    function connect()
    {
        return "Wow variable";
    }
}

namespace { // global code
    $a = MyProjectus\connect();
    echo $a . PHP_EOL;

    echo MyProjectus\Connection::start();

    echo __NAMESPACE__; // empty
}
