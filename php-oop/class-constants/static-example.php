<?php
class Foo
{
    // As of PHP 5.3.0
    const BAR = <<<'EOT'
bar
EOT;
    // As of PHP 5.3.0
    const BAZ = <<<EOT
baz
EOT;
}

echo Foo::BAR . "\n";
echo Foo::BAZ . "\n";
