<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 6/9/2017
 * Time: 3:17 PM
 *
 *
 * n! means n × (n − 1) × ... × 3 × 2 × 1

For example, 10! = 10 × 9 × ... × 3 × 2 × 1 = 3628800,
and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.

Find the sum of the digits in the number 100!
 */






/*
 *
 * Because php will not handel any numbers 2^32 wihtout a additonal library
 * this code will return the wrong answer. Using a lib such as BCMath would
 * be needed for php to solve this problem. This algorithum is solid though.
 *
 */


/**
 * @param $num, the number to factor
 * @return int, The factorial of the input
 */
function factorial($num){
	$result = 1;
	for($i = $num; $i >1; $i--){
		$result *= $i;
		echo "$result <BR>";
	}
	return $result;
}

$num = str_split(number_format(factorial(100),200));
$num = array_sum($num);
echo $num;

