<?php
/*
 * У вас есть массив чисел. Напишите три функции,
 * которые вычисляют сумму этих чисел: с for-циклом,
 * с while-циклом, с рекурсией.
 */
$_array = array(1,2,3,4,5,6,7,8,9,10);

function SumFirst($_array)
{
	$sum = 0;
	for ($i = 0; $i<count($_array); $i++) {
	   $sum +=$_array[$i];
	}
	return $sum;
}

function SumTwo($_array)
{
	$sum = 0;
	$i = 0;
	while ($i<count($_array)){
		$sum +=$_array[$i];
		$i++;
	}
	return $sum;
}

function SumThird($_array)
{
	$sum = 0;
	$i = 0;
	function SumArray($i, &$sum, $_array){
		$sum += $_array[$i];
		if ($i < count($_array)-1) {
			$i++;
			SumArray($i, $sum, $_array);
		}
	}
	if($sum == 0) SumArray($i, $sum, $_array);
	return $sum;
}

echo SumFirst($_array)."<br>";
echo SumTwo($_array)."<br>";
echo SumThird($_array)."<br>";



