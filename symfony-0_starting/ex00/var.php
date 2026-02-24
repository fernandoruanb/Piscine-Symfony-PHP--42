<?php

/*
	The same logic I did in Python. I made a var of vars to test what we need.
	. -> concatenate strings
	All variables in PHP must need to use $ in their names
	We use the function gettype to know the type of a variable
*/

	$vars = [
		10,
		"10",
		"ten",
		10.0
	];

	$counter = 'a';

	foreach ($vars as $var) {
		echo $counter . " contains " . $var . " and has a type " . gettype($var) . PHP_EOL;
		$counter++;
	}
?>
