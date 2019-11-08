<style>
#calendarHolder {
	width: 350px;
	height: 350px;
	background-color: gray;
	margin: auto;
}

.day {
	width: 40px;
	height: 40px;
	margin: 5px;
	background-color: darkgray;
	float: left;
	border:none;
	font-size: 14px;
}

.day:hover {
	cursor: pointer;
	background-color: #555555;	
}

#today {
	color: red;
}

.dayName {
	
	height: 20px;
	width: 40px;
	float: left;
	margin: 5px;
	margin-top: 10px;
	text-align: center;
	font-weight: bold;
}

.dayName:hover {
	
	height: 20px;
	width: 40px;
	float: left;
	margin: 5px;
	margin-top: 10px;
	text-align: center;
	color: white;
}

#calendarFrame {
	width: 400px;
	height: 350px;
	margin: auto;
	background-color: gray;
	padding: 25px;
	padding-top: 25px;
	border-radius: 50px;
}

#right, #left {
	margin-top: 20px;
	width: 100px;
	height: 40px;
	float: left;
	line-height: 0;
	font-size: 50;
	background-color: transparent;
	border: none;
}

#left {
	-moz-transform: scale(-1, 1);
	-webkit-transform: scale(-1, 1);
	-o-transform: scale(-1, 1);
	-ms-transform: scale(-1, 1);
	transform: scale(-1, 1);
}

#right {
	float: right;
}

</style>

<?php

	$actualDayNum = date("d");
	
	echo date("m");
	
	print '<div id="calendarFrame">';
	print '<div id="calendarHolder">';
	
		$actualDayName;
		for($daycol = 0; $daycol < 7; $daycol++){
			if($daycol+1 == 1) {$actualDayName="H";}
			else if($daycol+1 == 2) {$actualDayName="K";}
			else if($daycol+1 == 3) {$actualDayName="Sz";}
			else if($daycol+1 == 4) {$actualDayName="Cs";}
			else if($daycol+1 == 5) {$actualDayName="P";}
			else if($daycol+1 == 6) {$actualDayName="Sz";}
			else if($daycol+1 == 7) {$actualDayName="V";}

			print '<div class="dayName">'.$actualDayName.'</div>';
		}
	$started = false;
	$h = date("m");
	for($day=0; $day < 35; $day++){
			
			if(date("D")=="Sun" && $day+1 == 7) {
				$actualDayNum += 0;
				print '<button type="button" class="day">'.$actualDayNum.'</button>';
				$actualDayNum++;
				$started = true;
			}
			else if($started) {
				print '<button type="button" class="day">'.$actualDayNum.'</button>';
				$actualDayNum++;
			} else {
			print '<button type="button" disabled class="day">'.'</button>';
			}
			
			if($h == 1 || $h == 3 || $h == 5 || $h == 7 || $h == 8 || $h == 10 || $h == 12){
				if($actualDayNum == 31) $started = false;
			} else if($h == 2) {
				//TODO február
			}
			else {
				if($actualDayNum == 31) $started = false;
			}
	
			
	}
	print '<button id="left">&#10132;</button>';
	print '<button id="right">&#10132;</button>';
	
	
	
	print '</div>';
	print '</div>';
?>