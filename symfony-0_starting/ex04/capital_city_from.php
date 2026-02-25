<?php
	function capital_city_from(string $stateInput): ?string {
		if ($stateInput === null)
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

		if (!array_key_exists(trim($stateInput), $states))
			return "Unknown";
		$capital = trim($capitals[$states[trim($stateInput)]]);
		return $capital;
	}

	$result = capital_city_from("Oregon");
	if ($result !== null)
		echo $result . PHP_EOL;
?>
