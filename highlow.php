<?php

//Get User Name
fwrite(STDOUT, 'What is your first name? ');
$first_name = fgets(STDIN);
fwrite(STDOUT, "Hello $first_name" . "I'm thinking of a number between 1 and 100.\nCan you guess which one it is?\n");

//Computer Generates Number
//User will guess number
//Computer Outputs or Lower
