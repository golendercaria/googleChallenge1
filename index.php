<?php

	// Attention ce programme ne fonctionne qu'avec une solution

	$inital_array = array(1,3,96,4,57,67);
	$k = 100; // for 96 + 4

	$other_array = [];
	foreach($inital_array as $value){
		$other_array[] = $k - $value;
	}

	$other_array = array_intersect($inital_array, $other_array);

	$a = current($other_array);
	$b = end($other_array);

	echo "$a + $b = $k";


