<?php
namespace MyProject {

    const CONNECT_OK = 1;
    class Connection
    {}
    function connect()
    {}
}

// echo "Hi!"; // FATAL ERROR - NO CODE MAY EXIST OUTSIDE NAMESPACES

namespace AnotherProject {

    const CONNECT_OK = 0;
    class Connection
    {}
    function connect()
    {}
}

//echo constant(__NAMESPACE__ . '\CONNECT_OK'); // FATAL ERROR - NO CODE MAY EXIST OUTSIDE NAMESPACES
