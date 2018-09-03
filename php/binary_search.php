<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function binary_search($list, $target) {
	$first = 0;
	$last = (count($list) - 1);
	while($first <= $last) {
		
		$midpoint = ($first + $last) >> 1;
		
		// if the midpoint is == to the key
		// return key
		
		if($list[$midpoint] == $target) {
			return $midpoint;
		} else if($list[$midpoint] > $target) {
		//echo $list[$midpoint];
			$last  = $midpoint - 1;
			//echo $first;
		} else if($list[$midpoint] < $target) {
			$first = $midpoint + 1;
			//echo $first;
		}
	}
	return  -1;
}

function verify($index){
	if($index !== -1) {
		echo 'Target found at index: ' . $index;
	} else {
		echo 'Target not found in list';
	}
}

$list = array(1,2,3,4,5,6,7,8,9,10);
//verify(binary_search($list, 11) . '</br>');
verify(binary_search($list,10). '</br>');

$list = array();
for ($iterator = 1; $iterator <= 1000; $iterator++ ) {
	array_push($list, $iterator);
}
echo '<hr>';
//verify(binary_search($list, 1000000). '</br>');
verify(binary_search($list,999). '</br>');


?>