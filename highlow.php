<?php 

$random = mt_rand(1, 100);

fwrite(STDOUT, "What is your guess?(1-100)\n");

$userGuess = fgets(STDIN);

$guesses = 0;

do {
	if ($userGuess > $random) {
		$guesses ++;
		echo "LOWER\n";
		fwrite(STDOUT, "What is your guess?(1-100)\n");
		$userGuess = fgets(STDIN);
	} else if ($userGuess < $random) {
		$guesses ++;
		echo "HIGHER\n";
		fwrite(STDOUT, "What is your guess?(1-100)\n");
		$userGuess = fgets(STDIN);
	}
} while ($userGuess > $random || $userGuess < $random);

if ($userGuess == $random) {
	$guesses ++;
	echo "CORRECT!\n";
	echo "You toook $guesses guesses!\n";
}

 ?>