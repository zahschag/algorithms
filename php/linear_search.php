<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// The linear search algorithm will go through all items in a list sequentially until it finds a match
// This function takes the concept and either the position[index] of the item in the list or return false.
function linear_search($list, $key ) {
	for($i = 0; $i < count($list); $i++) {
		if($list[$i] == $key) {
			return $i;
		}
	}
	return -1; 
}


$list = array(1,2,3,4,5,6,7,8,9,10);
echo linear_search($list, 11) . '</br>';
echo linear_search($list,7). '</br>';

$list = array();

for ($iterator = 1; $iterator <= 1000; $iterator++ ) {
	array_push($list, $iterator);
}
echo '<hr>';
echo linear_search($list, 1000000). '</br>';
echo linear_search($list,999). '</br>';

?>