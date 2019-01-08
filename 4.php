<?php

	$first 		  	 = $_POST['initialString'];

	$object = array (
		'InitialInput' 	=> $first,
		'ReversedArray' => implode(array_reverse(str_split($first))),
		'HexInput' 		=> dechex($first),
		'BinaryInput'	=> decbin($first),
	);

	echo json_encode($object);
?>