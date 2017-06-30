<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 5/12/2017
 * Time: 4:18 PM
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */

$largest = 0;
for ($i = 999; $i > 99; $i--) {
	for ($j = $i; $j > 99; $j--) {
		$num = (string)($i * $j);

		//echo "$num <br>";
		if ($num == strrev($num)) {
			if ($num > $largest) {
				$largest = $num;
			}
		}
	}
}

echo "Largest is $largest";