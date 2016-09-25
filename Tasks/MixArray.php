<?php

/*
 * Напишите функцию, которая создаёт комбинацию двух списков
 * таким образом: [1, 2, 3] (+) [11, 22, 33] -> [1, 11, 2, 22, 3, 33]
 */

function MixArray($x, $y)
{
	for ($i=0; $i<count($x); $i++) {
		$mixArray[] = $x[$i];
		$mixArray[] = $y[$i];
	}
	return $mixArray;
}

$oneArray = [1, 2, 3];
$twoArray = [11, 22, 33];

print_r( MixArray($oneArray, $twoArray) );