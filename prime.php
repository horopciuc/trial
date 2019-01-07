<!DOCTYPE html>
<html>
<head>
	<title>Prime</title>
</head>
<body>

<h3>HTML Form</h3>

<form method="POST">

First number:
<input type="number" name="number1"/>
<br>
Second number:
<input type="number" name="number2"/>
<br>
<br>
<input type="submit" name="submit" value="Submit"/>

</form>

<?php

if (isset($_POST) && array_key_exists('submit', $_POST)) {
	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];
	$isPrime = true;

	if ($number2 < 2) {
		echo "Not cool";
	}
	else {
		for ($i = $number2; $i>=$number1; $i--) {
			$isPrime = true;
			for ($j=2; $j <= $i / 2 ; $j++) {
				if($i % $j == 0) {
					$isPrime = false;
					break;
				}
			}
			if ($isPrime) {
				echo "The biggest prime number in the interval is " . $i;
				break;
			}
		}

		if (!$isPrime) {
			echo "No prime nubmers found";
		}
	}
}

?>

</body>
</html>



