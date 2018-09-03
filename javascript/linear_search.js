function linear_search(list, target) {
	// go through each item in the list and compare it to the target.
	for(var i = 0; i < list.length; i++) {
		// when the index in the list matches the target return the index.
		if(list[i] == target) {
			return i;
		}
	}
	// In case the target is not found then return -1
	return -1;
}

function verify(index) {
	if(index !== -1) {
		console.log('Target found at index: ' + index);
	} else {
		console.log('Target not found!');
	}
}


var list = [];

for(var  i = 0; i <= 100000000; i++) {
	list.push(i);
}

verify(linear_search(list, 10));
verify(linear_search(list, 200));
verify(linear_search(list, 10000));
