<?php
function permutations($input)
{
	if (count($input) <= 1) return array($input);
	$result = array();
	foreach ($input as $v) {
		$reduce = array_filter($input,
			function ($e) use ($v) {
				return $e !== $v;
			}
		);
		$result = array_merge($result,
			array_map(
				function ($e) use ($v) {
					array_unshift($e, $v);
					return $e;
				},
				permutations($reduce)
			)
		);
	}
	return $result;
}
$input = array(1,2,3);
$result = permutations($input);
echo '<pre>';
var_dump($result);
echo '</pre>';