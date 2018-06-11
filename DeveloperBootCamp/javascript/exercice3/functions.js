function isEven(num){
    if(typeof(num) !== "number"){
        return "this is not a number!"
    }

    if (num%2===0){
        return true;
    }else{
        return false;
    }
}

//Test the function
console.log("isEven(4):"+isEven(4));
console.log("isEven(21):"+isEven(21));
console.log("isEven(68):"+isEven(68));
console.log("isEven(333):"+isEven(333));

function factorial(num){
    if(typeof(num) !== "number"){
        return "this is not a number!"
    }

    if(num === 0){
        return 1;
    }

    
    var result=num;
    while(num > 1){
        num--;
        result = result*num;
    }

    return result;
}

console.log("factorial(5):"+factorial(5));
console.log("factorial(2):"+factorial(2));
console.log("factorial(10):"+factorial(10));
console.log("factorial(0):"+factorial(0));

function kebabToSnake(str){
    return str.replace(/-/g, "_");
}

console.log("kebabToSnake(\"hello-world\")"+kebabToSnake("hello-world"));
console.log("KebabToSnake(\"dogs-are-awesome\")"+kebabToSnake("dogs-are-awesome"));
console.log("kebabToSnake(\"blah\")"+kebabToSnake("blah"));
