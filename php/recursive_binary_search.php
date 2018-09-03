<?php

function recursive_binary_search( $list, $target, $start, $end ) {
	if( $start > $end ) {
		return false;
	}
	
	$midpoint = ($start + $end) >> 1;
	// if the index in the middle is equal to the target then return the midpoint
	if( $list[$midpoint] == $target ) {
		return $midpoint;
		
	/* 
	* otherwhise if the index in the middle of the list is greater than the target then 
	* return the call to recursive_binary_search function and pass the end of the search to be
	* 1 less than the previously defined midpoint of the array to create a new subset that ends 
	* before the midpoint
	*/	
	} else if( $list[$midpoint] > $target ) {
		return recursive_binary_search( $list, $target, $start, $midpoint-1 );
	/*
	* Otherwise if the index in the middle of the list is less than the what we are searching for
	* then return a call to the recursive_binary_search function, making the start of the search
	* 1 more than the previously defined midpoint of the array to create a new subset that starts 
	* after the midpoint
	*
	*/
	} else if($list[$midpoint] < $target ) {
		return recursive_binary_search( $list, $target, $midpoint+1, $end );
	}
} 

function verify($result) {
	if($result) {
		echo "Target found at index: " . $result;	
	} else {
		echo 'Target not found';
	}
	

}

$list = array(1,2,3,4,5,6,7,8);
verify(recursive_binary_search($list, 5, 1, 8));