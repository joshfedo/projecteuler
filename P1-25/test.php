<?php
/**
 * Created by PhpStorm.
 * User: fedo
 * Date: 6/1/2017
 * Time: 10:04 AM
 */

for($i = 0 ; $i < 20; $i++){
	for($j = 0; $j < 20; $j++){
		if($i < 10){
			$tempi = '0'. $i;
		}else{
			$tempi = $i;
		}

		if($j < 10 ){
			$tempj = '0' . $j;
		}else{
			$tempj = $j;
		}
		echo "[$tempi][$tempj]   ";
	}
	echo "<br><br>";
}