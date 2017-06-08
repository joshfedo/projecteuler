<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 6/7/2017
 * Time: 8:18 AM
 *
 * 2^15 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.

What is the sum of the digits of the number 2^1000?
 */

//These kinds of problems are too easy in php
$num = 2**1000;
echo $num;
$num = str_split(number_format($num,1000));
$num = array_sum($num);
echo $num;



