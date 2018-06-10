//create secretNumber
var secretNumber = 4;

//Ask user for guess
var stringGuess = prompt("Guess a number");
var guess = Number(stringGuess);

//Check if guess is right
if(Number(guess) === secretNumber){
    alert("You got it right !");
}

//otherwise, check if higher 
else if(Number(guess) > secretNumber){
    alert("Too high...");
}

//otherwise check if lower
else {
    alert("Too low...");
}