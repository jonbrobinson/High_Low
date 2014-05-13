<?php

define("MINIMUM", $argv[1]);
define("MAXIMUM", $argv[2]);

$random_number = mt_rand(MINIMUM, MAXIMUM);
$guess_counter = 0;

fwrite(STDOUT, "Guess the number between " . MINIMUM . " and " . MAXIMUM . "\n");

do {

	$user_guess = fgets(STDIN);

	if ($user_guess < $random_number){
		fwrite(STDOUT, "higher\n");
	}
	elseif ($user_guess > $random_number) {
		fwrite(STDOUT, "lower\n");
	}
	$guess_counter++;
} while ($random_number != $user_guess);

fwrite(STDOUT,"Winner. It only took you $guess_counter tries to get it\n");














