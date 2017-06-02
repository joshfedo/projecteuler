<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 5/24/2017
 * Time: 4:17 PM
 *
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

a2 + b2 = c2
For example, 32 + 42 = 9 + 16 = 25 = 52.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc.


 */



//brute force does work but this is definitely not efficient
for($a = 1; $a < 1000; $a++){
	for($b = 1; $b < 1000; $b++){
		for($c = 1; $c < 1000; $c++){
			if($a**2 + $b**2 == $c**2 && $a+$b+$c == 1000){
				echo "a = $a b = $b c=$c";
				break;
			}
		}
	}
}


