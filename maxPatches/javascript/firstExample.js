//GLOBAL VARIABLES

var numObjects = 0;		//Starting number of objects
var maxObjects = 10;	//maximum possible objects

var objectSize = 30;	//Size of objects
var objectInset = 100;	//Sets the x/y inset of the objects

//Function to create and control a number of objects within max
function objectCreation (a) {

	//Limiter
	if (a < 0 ) a = 0;
	if (a > maxObjects) a = maxObjects;

	var numObjects = a;

	//delete old objects
	for (var i=0; i<maxObjects; i++){
		var oldObjects = this.patcher.getnamed("object"+i);
		this.patcher.remove(oldObjects);
		var oldMessages = this.patcher.getnamed("message"+i);
		this.patcher.remove(oldMessages);
	}

	//Create objects
	for (var i = 0; i < numObjects; i++) {
		xpos = objectInset + ((objectSize+objectSize)*i)
		ypos = objectInset;

		//make objects
		var newObject = this.patcher.newobject("button", xpos, ypos, objectSize, 0);
		newObject.varname = "object"+ i;

		//Create messages
		var newMessage = this.patcher.newobject("message", xpos+objectSize, ypos+objectSize, objectSize, objectSize);
		newObject.varname = "message" + i;

		//connect to integer
		this.patcher.hiddenconnect(newMessage, 0, this.patcher.getnamed("myInteger"), 0);	
	}

	//Put info into messages
	for (var i=0; i<numObjects; i++){
		var messageBoxes = this.patcher.getnamed("message"+i);
		messageBoxes.message("set", i);
	}

	//Connect message and object


}

//Some quick maths in max
function mathTest (a,b) {
	
	var input1 = a;
	var input2 = b;

	var output1 = input1 + input2;

	outlet(0, output1);
	messnamed("output1", output1);
}

