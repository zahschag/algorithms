// Binary function that eliminates possibilities that don't match specific criteria. 
	//Pre-conditions: the list must be sorted in asc order. 
	// O(log n)

function binary_search( list, target ) {
	var first = 0;
	var last = ( list.length ) -1;
	var operations = 0; // initialize operation counter.
	
	while (first <= last) {
		var mid = Math.floor( ( first + last ) / 2 );
		operations++; // add 1 if the 
		// When the 
		if( list[ mid ] == target ) {
			//return a json object that has the operations performed to get to the index as well as the index targeted
			return {'operations' : operations, 'index' : mid};
		} else if( mid < target) {
			first = mid + 1;
		} else if( mid > target ) {
			last = mid - 1;
		}
	}
	return -1;
}

function verify( json ) {
	if( json !== -1 ) {
		return console.log( 'It takes ' + json.operations + ' operations to find the index:' + json.index );
		//return console.log('Target found at index: ' + index);
	} else {
		return console.log( 'Target not found!' );
	}
}


var list = [];

for(var  i = 0; i <= 1000; i++) {
	list.push(i);
}

verify( binary_search( list, 10) );
verify( binary_search( list, 20) );
verify( binary_search( list, 30) );
verify( binary_search( list, 40) );
verify( binary_search( list, 50) );
verify( binary_search( list, 60) );
verify( binary_search( list, 80) );
verify( binary_search( list, 90) );
verify( binary_search( list, 100) );
verify( binary_search( list, 500) );