<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 5/24/2017
 * Time: 4:41 PM
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 * Find the sum of all the primes below two million.
 */
function find_prime_sum($max = 2000000)
{
	$test = 2;
	$number_line = range(2, $max);
	while ($test < $max) {
		for ($i = $test; $i <= $max; $i += $test) {
			if ($i != $test) {
				unset($number_line[$i - 2]);
			}
		}
		$test++;
	}
	return array_sum($number_line);
}

echo find_prime_sum();
