<?php
/**
 * Created by PhpStorm.
 * User: Fed
 * Date: 5/13/2017
 * Time: 11:57 AM
 *
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?
 *
 * no the fastest solution but it is correct
 */

$prime_count = 1;
$num = 3;
while ($prime_count != 10001){
    if(is_prime($num)){
         $prime_count++;
    }
    $num += 2;
}

function is_prime ($int){

     for($i =3; $i < $int; $i++){
        if($int % $i== 0){
            return false;
        }
    }
    return true;
}

echo $num - 2;