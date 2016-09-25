<?php
/*
 * У вас есть массив чисел, составьте из них максимальное число.
 * Например: [61, 228, 9] -> 961228
 */

$myArray =  array(61, 228, 9);

$sumText =array();

/*
 * str_split пазбивает каждый элемент массива на отдельные значения
 * сохраняем их в новый массив результатом будет массив из массивов

array (size=3)
  0 =>
    array (size=2)
      0 => string '6' (length=1)
      1 => string '1' (length=1)
  1 =>
    array (size=3)
      0 => string '2' (length=1)
      1 => string '2' (length=1)
      2 => string '8' (length=1)
  2 =>
    array (size=1)
      0 => string '9' (length=1)

 */
for ($i=0; $i<count($myArray); $i++) {
	$sumText[] = str_split( $myArray[$i] );
}

$bigArray = array();

/*
 * пересобираем двумерный массив в обычный
 */

for ($i=0; $i<count($sumText); $i++) {
	for ($y=0; $y<count($sumText[$i]); $y++) {
		$bigArray[] = $sumText[$i][$y];
	}
}

rsort($bigArray);// сортируем

$result = '';

for ($i=0; $i<count($bigArray); $i++) {
	$result .= $bigArray[$i]; //объеденяем все значения массива в одну строку
}

echo $result; //  961228