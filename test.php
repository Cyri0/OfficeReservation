<?php
	echo "Mai nap:<br>";
	
	$year = date("Y");
	$month = date("m");
	$day = date("d");

	$today = strtotime($year.$month.$day);
		echo date("Y",$today).".";
		echo date("m",$today).".";
		echo date("d",$today).".";

	for($i = 1; $i < 15; $i++){
		echo "<br>".$i." hónap múlva:<br>";
		if($month < 12){
			$month = $month + 1;
			if($month < 10) $month = "0".$month;
		} else {
			$month = '01';
			$year = $year + 1;
		}
			$result = strtotime($year.$month.$day);
			echo date("Y",$result).".";
			echo date("M",$result).".";
			echo date("d",$result).".";
			echo "<br>";
	}
?> 