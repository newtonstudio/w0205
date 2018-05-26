<?php

	//PHP indexed Array
	$a = array("A","B","C");

	print_r($a);

	$c = array("D","E","F");

	print_r($c);

	$d = array_merge($a, $c);

	print_r($d);

	
	//Php Associative Array
	$b = array(
		"Michael" 	=> 53, 
		"Adam" 		=> 54, 
		"Kiki" 		=> 22
	);

	$b['Robert'] = 54;



?>