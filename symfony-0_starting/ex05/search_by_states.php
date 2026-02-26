<?php
	function search_by_states(string $statesInput): ?array {
		if ($statesInput === null)
			return null;

		$states = [
                        'Oregon' => 'OR',
                        'Alabama' => 'AL',
                        'New Jersey' => 'NJ',
                        'Colorado' => 'CO',
                ];

                $capitals = [
                        'OR' => 'Salem',
                        'AL' => 'Montgomery',
                        'NJ' => 'trenton',
                        'KS' => 'Topeka',
                ];

		$statesGet = explode(",", trim($statesInput));
		$results = [];

		foreach ($statesGet as $s) {
			$target = trim($s);
			if ($target === '')
				continue ;
			if (!array_key_exists($target, $states)) {
				$results[] = "{$target} is neither a capital nor a state.";
				continue ;
			}
			$capital = trim($capitals[$states[$target]]);
			$results[] = "{$capital} is the capital of {$target}";
		}

		return $results;
	}

	/*$results = search_by_states("Oregon, ,trenton, Topeka, NewJersey");
	foreach ($results as $result) {
		echo $result . PHP_EOL;
	}*/
?>
