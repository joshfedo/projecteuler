<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 6/8/2017
 * Time: 10:37 AM
 * If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
 * If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
 * NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen) contains 20 letters. The use of "and" when writing out numbers is in compliance with British usage.
 */

//using phps built in number format class made this very simple
$f = new NumberFormatter("en_GB", NumberFormatter::SPELLOUT);
$sum = 0;
for ($i = 1; $i <= 1000; $i++) {
	$sum += strlen(str_replace(array('-', ' '), '', $f->format($i)));
	//the problems asks to add 'and' to the numbers
	//so we only add it on numbers over 100 and that are not multiples of 100
	if ($i >= 101 && $i % 100 != 0) {
		$sum += 3;
	}
}
echo $sum;