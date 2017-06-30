<?php
/**
 * Created by PhpStorm.
 * User: Fed
 * Date: 5/13/2017
 * Time: 11:48 AM
 * The sum of the squares of the first ten natural numbers is,
 * 12 + 22 + ... + 102 = 385
 * The square of the sum of the first ten natural numbers is,
 * (1 + 2 + ... + 10)2 = 552 = 3025
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */

$sum_of_sqr = 0;
$sqr_of_sum = 0;
for ($i = 1; $i <= 100; $i++) {
	$sum_of_sqr += $i ** 2;
	$sqr_of_sum += $i;
}
echo 2 ** 2 . "<hr>";
echo ($sqr_of_sum ** 2) - $sum_of_sqr;