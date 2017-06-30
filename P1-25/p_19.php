<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 6/9/2017
 * Time: 3:07 PM
 * You are given the following information, but you may prefer to do some research for yourself.
 * 1 Jan 1900 was a Monday.
 * Thirty days has September,
 * April, June and November.
 * All the rest have thirty-one,
 * Saving February alone,
 * Which has twenty-eight, rain or shine.
 * And on leap years, twenty-nine.
 * A leap year occurs on any year evenly divisible by 4, but not on a century unless it is divisible by 400.
 * How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?
 */

//php i <3 u
//too easy
$sum_sundays = 0;
$date = '1901-01-01';
while ($date < '2001-01-01') {
	if (date('D', strtotime($date)) == 'Sun') {
		$sum_sundays++;
	}
	$date = date('Y-m-d', strtotime('+1 month ' . $date));
}
echo $sum_sundays;