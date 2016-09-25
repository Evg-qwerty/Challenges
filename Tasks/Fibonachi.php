<?php

/*
 * Вычислите первые 100 чисел Фибоначчи.
 */

$result = array(0, 1);
$prevPrev = 0;
$prev = 1;

for ($i=2; $i<=100; $i++) {
	$actual = $prevPrev + $prev;
	$result[$i] = $actual;
	$prevPrev = $prev;
	$prev = $result[$i];
}

echo '<pre>';
var_dump($result);
echo '</pre>';