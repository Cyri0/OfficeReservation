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




@media only screen and (max-width: 500px) {
	#products_section {
		height: 900px;
	}

	#products-container {
/*		width: 500px; */
		height: 1200px;
		margin: auto;
	}

	#products-container div	{
		width: 300px;
		height: 200px;
		float: none;
	}
	
	#products-container div img {
		max-width: 150px;
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 25px;
		float: right;
	}

	#products_section #second {
		float: left;
		margin: top: 10px;
		margin-left: 10px;
	}

	#products-container div p {
		font-size: 14px;
		margin-left: 10px;
		margin-right: 10px;
		padding-top: 10px;
		padding-left: 20px;
		padding-right: 10px;
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		-o-hyphens: auto;
		hyphens: auto;
	}

	#products-container div .title {
		font-size: 20px;
		text-align: left;
		padding-top: 20px;
		padding-left: 10px;
		padding-right: 10px;
	}
	
	
}



































/*
#products-container {
	width: 100%;
	height: 600px;
	margin: auto;
	background-color: blue;
}
/*
#products_section h2 {
	font-family: var(--main-font);
	font-size: 20pt;
	text-align: center;
	color: black;
	padding-top: 50px;
	padding-bottom: 30px;
	font-family:
}

#products-container div {
	width: 280px;
	height: 280px;
	margin: 33px;
	margin-bottom: 0;
	float: left;
	
	background-color: var(--color2);
	color: var(--color1);

	-webkit-box-shadow: 14px 13px 10px -12px rgba(0,0,0,0.5);
	-moz-box-shadow: 14px 13px 10px -12px rgba(0,0,0,0.5);
	box-shadow: 14px 13px 10px -12px rgba(0,0,0,0.5);
}

#products-container div:hover {
	cursor: pointer;
}

#products-container div img {
 max-width: 180;
 margin-left: 50px;
 margin-top: 20px;
 text-align: center;
}

#products-container div p {
	font-size: 14px;
	margin-left: 10px;
	margin-right: 10px;
	padding-top: 10px;
	-webkit-hyphens: auto;
	-moz-hyphens: auto;
	-ms-hyphens: auto;
	-o-hyphens: auto;
	hyphens: auto;
}

#products-container div .title {
	font-size: 20px;
	text-align: center;
	padding-top: 10px;
}

#products-container div:hover {
}


@media only screen and (max-width: 1000px) {
	#products_section {
	height: 1200px;
}

#products-container {
/*	width: 800px;*/
	height: 1200px;
	margin: auto;
}

	
}

@media only screen and (max-width: 500px) {
	#products_section {
		height: 900px;
	}

	#products-container {
/*		width: 500px; */
		height: 1200px;
		margin: auto;
	}

	#products-container div	{
		width: 300px;
		height: 200px;
		float: none;
	}
	
	#products-container div img {
		max-width: 150px;
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 25px;
		float: right;
	}

	#products_section #second {
		float: left;
		margin: top: 10px;
		margin-left: 10px;
	}

	#products-container div p {
		font-size: 14px;
		margin-left: 10px;
		margin-right: 10px;
		padding-top: 10px;
		padding-left: 20px;
		padding-right: 10px;
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		-ms-hyphens: auto;
		-o-hyphens: auto;
		hyphens: auto;
	}

	#products-container div .title {
		font-size: 20px;
		text-align: left;
		padding-top: 20px;
		padding-left: 10px;
		padding-right: 10px;
	}
	
	
}