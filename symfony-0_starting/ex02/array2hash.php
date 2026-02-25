<?php
	/*
		My function see if I receive a true array and I have, at least, two elements
		If I do not have two elements, less than two elements, I only ignore and continue, that was my
		choose. Then, I validate the type of the input (string and integer) to put in my dictionary (Hash,
		the same as Ruby language)

		Python -> dictionary
		Ruby -> hash
		PHP -> associative array
		C++ -> map
	*/

	function array2hash(array $input): array {
		$hash = [];

		foreach ($input as $i) {
			if (!is_array($i) || count($i) < 2) {
				continue ;
			}

			$name = $i[0];
			$age = $i[1];

			if (!is_string($name) || !is_int($age))
				continue ;
			$hash[$age] = trim($name);
		}
		return $hash;
	}

/* TEST ZONE
	$data = [
		["Bruno", 24],
		["Larissa", 25],
		["Fernando", 24],
		["Rebeca", 23]
	];

	$result = array2hash($data);
	print_r($result);
*/
?>
