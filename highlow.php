<?php 

if(!is_numeric($argv[1]) || !is_numeric($argv[2])) {
	fwrite(STDERR, "Both arguments must be numbers!\n");
	exit(1);
};

$random = mt_rand($argv[1], $argv[2]);	

fwrite(STDOUT, "What is your guess?($argv[1]-$argv[2])\n");

$userGuess = fgets(STDIN);

$guesses = 0;

do {
	if ($userGuess > $random) {
		$guesses ++;
		echo "LOWER\n";
		fwrite(STDOUT, "What is your guess?($argv[1]-$argv[2])\n");
		$userGuess = fgets(STDIN);
	} else if ($userGuess < $random) {
		$guesses ++;
		echo "HIGHER\n";
		fwrite(STDOUT, "What is your guess?($argv[1]-$argv[2])\n");
		$userGuess = fgets(STDIN);
	}
} while ($userGuess > $random || $userGuess < $random);

if ($userGuess == $random) {
	$guesses ++;
	echo "CORRECT!\n";
	echo "You toook $guesses guesses!\n";
}

?>