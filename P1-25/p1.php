<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 5/12/2017
 * Time: 2:57 PM

 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
Find the sum of all the multiples of 3 or 5 below 1000.

 */


$total = 0;
for($i = 0; $i<=1000; $i++){
	if($i % 3 === 0 || $i % 5 ===0){
		$total += $i;
	}
}

echo "Total is $total";