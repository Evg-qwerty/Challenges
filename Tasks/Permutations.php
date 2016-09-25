<?php

function swap(&$arr, $i, $j) {
	$c = $arr[$i];
	$arr[$i] = $arr[$j];
	$arr[$j] = $c;
}

$array = array(1, 2, 3);
$arrCount = count($array);

function generate($k) {
	global $arrCount, $array;
	if ($k == $arrCount - 1) {
		foreach ($array as $value) {
			print $value.' ';
		}
		print "<br>";
	} else {
		for ($j = $k + 1; $j < $arrCount; $j++) {
			swap($array, $k + 1, $j);
			generate($k + 1);
			swap($array, $k + 1, $j);
		}
	}
}

generate(-1);
