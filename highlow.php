<?php

//Get User Name

$Win_num = rand(1,100);

fwrite(STDOUT, 'What is your first name? ');
$first_name = fgets(STDIN);
fwrite(STDOUT, "Hello $first_name" . "I'm thinking of a number between 1 and 100.\nCan you guess which one it is?\n");

$user_guess = fgets(STDIN);

while ($user_guess != $Win_num) {
	
	if ($user_guess < $Win_num) {
		echo "Higher" ;
		$user_guess = fgets(STDIN);

	}
	else {
		echo "Lower" ;
		$user_guess = fgets(STDIN);
	}

}

	echo "Winner Winner, Chicken Dinner" ;



//Computer Generates Number
//User will guess number
//Computer Outputs or Lower
