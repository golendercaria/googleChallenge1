<?php

	$inital_array = array(1,3,96,4,57,67, 50, 50);
	$k = 100; // for 96 + 4

	$a = null;
	$b = null;
	foreach($inital_array as $value){
		$diff = $k - $value;
		if( in_array($diff, $inital_array) ){
			if( $a == null ){
				$a = $diff;
			}
			elseif( $diff + $a == $k ){
				$b = $diff;
				break;
			}
		}
	}

	echo "$a + $b = $k";


