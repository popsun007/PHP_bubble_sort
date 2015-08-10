<?php

function swap($index1, $index2, &$arr){
	$temp = $arr[$index1];
	$arr[$index1] = $arr[$index2];
	$arr[$index2] = $temp;
}
function bubble_sort($arr){
	$time_start = microtime(true);
	for($i=0; $i<count($arr); $i++){
		for($j=0; $j<count($arr)-$i-1; $j++){
			if ($arr[$j]>=$arr[$j+1]){
				swap($j, $j+1, $arr);
			}
		}
	}
	$time_end = microtime(true);
	$time = $time_end - $time_start;
	echo "This bubble sort took: ". $time ." second(s).<br>";
	echo "The sorted array: <br>";
	var_dump($arr);
}

$numbers = array();
for($i=0; $i<100; $i++){
	$numbers[] = rand(1, 10000);
}
echo "The original array: <br>";
var_dump($numbers);
bubble_sort($numbers);

?>