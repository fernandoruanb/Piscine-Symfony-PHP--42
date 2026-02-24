<?php
	/*
		To open a file, we can use the function fopen and specif we want "r" to read.
		Then, I verify if I really read the file. If I do not have the target, I say to PHP die
		immediately.

		In the loop, I extract the information I need, trim to avoid newlines and spaces (creating a big
		mess) and print the result with the function echo. At the final, I need to close
		the file descriptor		
	*/

	$numbers = fopen("ex01.txt", "r");

	if ($numbers === false) {
		die("Error: Failed to read the archive");
	}

	while (($line = fgets($numbers)) !== false) {
		$number = explode(",", $line);
		foreach ($number as $num) {
			echo trim($num) . PHP_EOL;
		}
	}

	fclose($numbers);
?>
