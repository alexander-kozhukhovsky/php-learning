<?php
/* range() - creates an array containing a range of elements

Эта функция делает то же, что и встроенная в PHP, range().
Единственная разница заключается в том, что range() вернула бы вам массив из миллиона чисел,
а xrange() вернет итератор, который будет выбрасывать эти числа,
но никогда не будет создавать массив со всеми ними.
**/
function xrange($start, $limit, $step = 1)
{
    if ($start < $limit) {
        if ($step <= 0) {
            throw new LogicException('Step must be +ve');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('Step must be -ve');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}

echo 'Single digit odd numbers from range():  ';
foreach (range(1, 9, 2) as $number) {
    echo "$number ";
}
echo "\n";

echo 'Single digit odd numbers from xrange(): ';
foreach (xrange(1, 9, 2) as $number) {
    echo "$number ";
}

echo PHP_EOL;
