function printReverse(arr) {
    var max = arr.length -1 ;
    for (var i = max; i >= 0; i-- ){
        console.log(arr[i]);
    }
}

printReverse([1, 2, 3, 4]);