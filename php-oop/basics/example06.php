<?php
// В PHP 5.4.0 введена возможность обратиться к свойству или методу только что созданного объекта в одном выражении:
var_dump(get_object_vars(new DateTime()));
echo (new DateTime())->format('Y') . "\n";
