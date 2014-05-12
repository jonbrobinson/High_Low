<?php

// Create a number
// while the user hasn't guess correctly
	// promp user "guess a number"
	// get number from user
	// check the number and the guess
	// if the guess is higher than thhe number then tell the user "lower"
	// add to the guess count
	// if the guess is lower than the number then tell the user "higher"
// End the loop 

// Variables
$WinNum = rand(1,100);
$count = 1;

//Greeting

fwrite(STDOUT, 'What is your Name? ');

$first_name = fgets(STDIN);

fwrite(STDOUT, "Hello $first_name" . "I'm thinking of a number between 1 and 100.\nCan you guess which one it is?\n");

//While Loop equation

$user_guess = fgets(STDIN);

while ($user_guess != $WinNum) {
	$count++;
	if ($user_guess < $WinNum) {
		echo "Higher\n";
		$user_guess = fgets(STDIN);
	}
	else {
		echo "Lower\n";
		$user_guess = fgets(STDIN);
	}
	
}

	echo "Winner Winner, Chicken Dinner. Only $count guesses to get it right." . PHP_EOL;