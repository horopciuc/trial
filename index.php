<!-- https://api.jquery.com/jQuery.Ajax/#jQuery-ajax-url-settings -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

</head>
<body>
<div>Type the input</div>
<form method="POST">

<input type="text" name="myText"><br>
<input type="submit" name="Process">
</form>

<?php

if (isset($_POST) && array_key_exists('Process', $_POST)) {

	$array = [
		'name' => 'Kunai',
		'age' => 24,
		'Location' => 'India'
	];

	$jsonData = json_encode($array);

	echo $jsonData;

	$var = $_POST['myText'];

	echo $var;
}
?>

<script type="text/javascript" src="main.js"></script>
</body>



</html>