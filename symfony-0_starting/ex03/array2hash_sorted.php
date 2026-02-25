<?php
	/*
		It is practically the same order that the last exercise. I only need to put the function
		krsort() to make the order of the names reverse
	*/

	function array2hash_sorted(array $data): array {
		$hash = [];

		foreach ($data as $item) {
			if (!is_array($data) || count($data) < 2) {
				continue ;
			}

			$name = $item[0];
			$age = $item[1];

			if (!is_string($name) || !is_int($age)) {
				continue ;
			}
			$hash[trim($name)] = $age;
		}
		krsort($hash);
		return $hash;
	}

/*	$data = [
		["Fernando", 24],
		["Larissa", 24],
		["Rebeca", 23],
		["Bruno", 23]
	];

	$result = array2hash_sorted($data);
	print_r($result);
*/
?>
