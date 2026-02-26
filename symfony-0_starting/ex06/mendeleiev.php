<?php
	$file = fopen("ex06.txt", "r");

	if ($file === false) {
		die("Error reading the file");
	}

	$input = '';

	while (($line = fgets($file)) !== false) {
		$dict = [];
		$element = explode("=", $line);
		$properties = explode(",", $element[1]);
		foreach ($properties as $prop) {
			$getEachPropertie = explode(":", $prop);
			$dict[trim($getEachPropertie[0])] = trim($getEachPropertie[1]);
		}
		$elementName = $element[0];
		$position = $dict["position"];
		$small = $dict["small"];
		$number = $dict["number"];
		$molar = $dict["molar"];
		$electron = $dict["electron"];

		$doc = "<table>
				<tr>
					<td style='border: 1px solid black; padding:10px'>
					<h4>{$elementName}</h4>
					<ul>
						<li>Atomic: {$number}</li>
						<li>No {$position}</li>
						<li>{$small}</li>
						<li> {$molar} </li>
						<li>{$electron} electrons</li>
					<ul>
				</td>";
		$input .= ($doc ?? '');
	}

	$html = "<!DOCTYPE html>
	<html lang='en'
		<head>
			<meta charset='utf-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<meta name='author' content='Fernando Ruan'>
			<title>Mendeleiv table</title>
		</head>
		<body>
			{$input};
		</body>
	</html>
	";

	$output = fopen("mendeleiv.html", "w");

	if ($output === false) {
		fclose($file);
		die("Error creating the file");
	}
	fwrite($output, $input);
	fclose($output);
	fclose($file);
?>
