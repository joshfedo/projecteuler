<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 6/2/2017
 * Time: 2:47 PM
 */
$solved_numbers = array(1);
for ($i = 2; $i < 1000000; $i++) {
	$count = 0;
	$number = $i;
	while ($number != 1) {
		//by keeping track of seqences weve already solved we dont need to resolve them
		//this is a major time saver
		if(array_key_exists($number,$solved_numbers)){
			$count += $solved_numbers[$number];
			break;
		}

		if ($number % 2 == 0) {
			$number = $number /  2;
		} else {
			$number = $number * 3 + 1;
		}
		$count++;
	}
	$solved_numbers[$i]=$count + 1;
}
echo array_search(max($solved_numbers),$solved_numbers);

