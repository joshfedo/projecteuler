<?php

/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 6/1/2017
 * Time: 11:31 AM
 *
 * The sequence of triangle numbers is generated by adding the natural numbers. So the 7th triangle number would be 1 + 2 + 3 + 4 + 5 + 6 + 7 = 28. The first ten terms would be:

1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...

Let us list the factors of the first seven triangle numbers:

1: 1
3: 1,3
6: 1,2,3,6
10: 1,2,5,10
15: 1,3,5,15
21: 1,3,7,21
28: 1,2,4,7,14,28
We can see that 28 is the first triangle number to have over five divisors.

What is the value of the first triangle number to have over five hundred divisors?
 */



class Triangle_Divisors{
	/**
	 *
	 * @param $max_divisors, How many divisors your looking for
	 * @return int, The triangle number
	 */
	function find_triangle($max_divisors){
		$num_of_divs = 0;
		$tri_num = 1;
		$adder = 2;
		//this is just a arbitrary number and could be optimized
		$primes = $this->find_primes(0,100000);
		while($num_of_divs < $max_divisors){
			$tri_num += $adder;
			$adder++;
			if(!in_array($tri_num,$primes)) {
				$prime_factors = $this->prime_factors($tri_num, $primes);
				$count = array_count_values($prime_factors);
				$num_of_divs = 1;
				foreach ($count as $num){
					$num_of_divs *= ($num +1);
				}
			}
		}
		return $tri_num;
	}

	/**
	 * @param $num
	 * @param $list_of_primes
	 * @return array, an array of prime numbers
	 */
	private function prime_factors($num, $list_of_primes){
		$prime_factors = array();
		while($num != 1){
			foreach ($list_of_primes as $prime){
				while($num % $prime == 0){
					array_push($prime_factors,$prime);
					$num = $num / $prime;
				}
				if($num ==1){
					break;
				}
			}

		}
		return $prime_factors;
	}

	/**
	 * @param     $start
	 * @param int $num_of_primes, how man primes you would like to find
	 * @return array, A array containg all the prime numbers it found
	 */
	private function find_primes($start, $num_of_primes = 100)
	{
		$start = 2;
		$number_line = range(2, $num_of_primes);
		while ($start < $num_of_primes) {
			for ($i = $start; $i <= $num_of_primes; $i += $start) {
				if ($i != $start) {
					unset($number_line[$i - 2]);
				}
			}
			$start++;
		}
		return ($number_line);
	}


}

$finder = new Triangle_Divisors();
echo $finder->find_triangle(500);








