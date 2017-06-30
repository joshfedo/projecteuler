<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 5/12/2017
 * Time: 4:33 PM
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 */

$flag = true;
//nothing will be smaller then the product of the two largest divisors 20*19
$small = 380;
while ($flag) {
	$small += 2;
	for ($i = 20; $i > 0; $i--) {
		if ($small % $i !== 0) {
			break;
		}
	}
	if ($i == 0) {
		$flag = false;
	}
}

echo $small;