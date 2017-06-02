<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 6/2/2017
 * Time: 3:21 PM
 *
 *
 Starting in the top left corner of a 2×2 grid, and only being able to move to the right and down, there are exactly 6 routes to the bottom right corner.
 * <image>https://projecteuler.net/problem=15</image>
 How many such routes are there through a 20×20 grid?
 *
 *
 */


//our 21x21 grid because if we did 20x20 we would not be able to calculate the sides
//$grid = array(
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
//	array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)
//);

$grid = array(
array(0,0,0,0,0,0,0,0,0,0),
array(0,0,0,0,0,0,0,0,0,0),
array(0,0,0,0,0,0,0,0,0,0),
array(0,0,0,0,0,0,0,0,0,0),
array(0,0,0,0,0,0,0,0,0,0),
array(0,0,0,0,0,0,0,0,0,0),
array(0,0,0,0,0,0,0,0,0,0),
array(0,0,0,0,0,0,0,0,0,0),
array(0,0,0,0,0,0,0,0,0,0),
array(0,0,0,0,0,0,0,0,0,0),

);
function rout_counter($grid,$i,$j,$count){


	$this_gird = $grid;

	$this_gird[$i][$j] = 1;

	if($i ==9 && $j ==9){
		$count++;

		//echo "<hr> $count<br>";
		foreach ($this_gird as $grid){
			foreach ($grid as $row){
				echo " $row ";
			}
			echo "<br>";
		}

		echo "we did it!";
		echo "<hr>";
		echo "<hr>";
		return $count;
	}

	if(($j +1 < count($this_gird) && $this_gird[$i][$j+1] != 1 )){

		$count = rout_counter($this_gird,$i,$j+1,$count);

	}
	if( ($i+ 1 < count($this_gird)) && $this_gird[$i+1][$j]!= 1){
		$count = rout_counter($this_gird,$i+1,$j,$count);

	}
	//this is if you want to be able to move up and left as well
//	if ($i - 1 >= 0 && $this_gird[$i-1][$j] != 1 ){
//		echo "3: $i and $j  <br>";
//		$count +=rout_counter($this_gird,$i -1,$j,$count);
//	}
//
//	if($j -1 >= 0 && $this_gird[$i][$j-1] != 1 ){
//		echo "4: $i and $j  <br>";
//		$count += rout_counter($this_gird,$i,$j-1,$count);
//	}
	return $count;
}
echo rout_counter($grid,0,0,0);