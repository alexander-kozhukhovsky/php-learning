<?php
namespace MyProject;

const CONNECT_OK = 1;
class Connection
{}
function connect()
{}
echo "From MyProject namespace - " . constant(__NAMESPACE__ . '\CONNECT_OK') . PHP_EOL;

namespace AnotherProject;

const CONNECT_OK = 0;
class Connection
{}
function connect()
{}
echo "From AnotherProject namespace - " . constant(__NAMESPACE__ . '\CONNECT_OK') . PHP_EOL;
