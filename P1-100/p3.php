
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 5/12/2017
 * Time: 2:57 PM
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 * --------------------------------------------------------------
 * Thoughts and notes:
 */


$number = 600851475143;


$i = 3;
//no prime numbers will be above the sqrt
while ($i < ceil(sqrt($number))) {
	if ($number % $i == 0) {
		$number /= $i;
	} else {
		$i++;
	}
}

echo "largest is: $number";