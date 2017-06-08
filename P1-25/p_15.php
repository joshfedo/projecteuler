<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 6/2/2017
 * Time: 3:21 PM
 *
 Starting in the top left corner of a 2×2 grid, and only being able to move to the right and down, there are exactly 6 routes to the bottom right corner.
 * <image>https://projecteuler.net/problem=15</image>
 How many such routes are there through a 20×20 grid?
 *
 *I was able to solve this using Central the formula Binomial Coefficient. This method is very efficient and fast.
 */

/**
 * @param $num, the number to factor
 * @return int, The factorial of the input
 */
function factorial($num){
	$result = 1;
	for($i = $num; $i >=1; $i--){
		$result *= $i;
	}
	return $result;
}

/**
 * @param $grid_size, How large the grid is
 * @return int, how many paths there are
 */
function solve_paths($grid_size){
	return factorial(2*$grid_size)/factorial($grid_size)**2;
}

echo solve_paths(20);

/*
 * This method worked but was very slow and took up a lot of memory. After looking at the output i realised this
 * could probably be solved with simple math. Im leaving the rest here just to show my recursion attempt*
 */

//$grid = array(
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//
//
//
//);
//function rout_counter($grid,$i,$j,$count){
//	$this_gird = $grid;
//	$this_gird[$i][$j] = 1;
//	if($i ==5 && $j ==5){
//		$count++;
////		echo "<pre>";
////		echo print_r($this_gird);
////		echo "</pre>";
//		return $count;
//	}
//	if(($j +1 < count($this_gird) && $this_gird[$i][$j+1] != 1 )){
//		$count = rout_counter($this_gird,$i,$j+1,$count);
//	}
//	if( ($i+ 1 < count($this_gird)) && $this_gird[$i+1][$j]!= 1){
//		$count = rout_counter($this_gird,$i+1,$j,$count);
//	}
//	unset($this_gird);
//	return $count;
//}
////echo "total "  . rout_counter(make_arr(6),0,0,0);
//
//
