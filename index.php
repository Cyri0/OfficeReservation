<html>
	<head>
		<meta charset="tuf-8">
		<title>Lorem Ipsum dolor si amet</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
		<html lang="hu">
	</head>
	<body>			
		<header>
			<div class="mobileMenu">
				<select>
					<option disabled selected>
						&#9776;
					</option>
					<option>Tárgyaló</option>
					<option>Oktató terem</option>
					<option>Szolgáltatások</option>
					<option>Foglalás</option>
					<option>Kapcsolat</option>
				</select>
			</div>
			<nav>
				<ul>
					<a href="#office" class="hideable">
						<li>Tárgyaló</li>
					</a>
					<a href="#office" class="hideable">
						<li>Oktató terem</li>
					</a>
					<a href="#products" class="hideable">
						<li>Szolgáltatások</li>
					</a>
					<a href="#reservation" class="hideable">
						<li>Foglalás</li>
					</a>
					<a href="#connection" class="hideable">
						<li>Kapcsolat</li>
					</a>
				</ul>
			</nav>
		</header>
		<main>
			<section class="slideshow-section">
				<div class="slideshow-container">
					<div class="mySlides fade">
						<div class="main_title">
							<h1>Lorem Ipsum</h1>
							<h2>dolor si amet</h2>
						</div>
						<img src="images/office.jpg">
					</div>
					<div class="mySlides fade">
						<img src="images/office2.jpg">
					</div>
					<div class="mySlides fade">
						<img src="images/office3.jpg">
					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
			</section>

			<section id="office_section">
				<a name="office">
				<div id="office-container">
					<h2>Miért a mi irodánk a legjobb választás?</h2>
					<div id="goodChoice">
						<div class="choice">
							<img src="images/office_chair.png">
							<p class="title">Modern környezet</p>
							<p>irodai szolgáltatásokkal</p>
						</div>
						<div class="choice">
							<img src="images/coin.png">
							<p class="title">Kedvező árak</p>
							<p>nincs fenntartási költség</p>
						</div>
						<div class="choice">
							<img src="images/services.png">
							<p class="title">Kiegészítő szolgáltatások</p>
							<p>catering és transzfer szolgáltatás,<br>egyedi igények kiszolgálása</p>
						</div>
					</div>
				</div>
			</section>
				
			<section id="products_section">
							<a name="products"></a>

				<h2>Tekintse át szolgáltatásainkat!</h2>
				<div id="products-container">
					<div>
						<img src="images/office_11.jpg">
						<p class ="title">Consequat ligula</p>
						<p>Suspendisse felis magna, consequat ut ligula eu, sagittis posuere risus.</p>
						<!--<a href=""><div class="button">További információk</div></a> -->
					</div>

					<div>
						<img id="second" src="images/targyalas_11.jpg">
						<p class="title">Posuere</p>
						<p>Phasellus eget nisi non mauris vulputate posuere.</p>
					</div>

					<div>
						<img src="images/targyalas_11.jpg">
						<p class="title">Urna finibus</p>
						<p>In sed magna eget urna finibus condimentum eu venenatis metus!</p>
					</div>
				</div>
				
			</section>
			
			<section id="reservation_section">
				<a name="reservation">
				<h2>Foglaljon még ma!</h2>
<!--NAPTAR BEGIN -->

<div id = "moreDetails" style="display:none">

<button id="exitButtonMoreDetails" onclick="hidePopup()">&#10132</button>

<h3 id="moreDetailsTitle">Időpontfoglalás<h3>
	<form action="html5_select_1.php"  method="post">

<div id="timePickerHolder">
	<h5>Választott időpont:</h5>
		
		<szoveg id = "text_test"></szoveg>
		<br>
	    <select name="startHour" size=”2”>
		<?php
		for($i = 8; $i < 23; $i++){
			if($i == date('H') + 1){			
				echo '<option value="'.$i.'" selected>'.$i.'</option>';
			}
			else {
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
		}
		?>
	   </select>
	   <sign>:</sign>
	   <select name="startMin" size=”2”>
	   
	   <?php
	   echo  '<option value="00">00</option>';
	   echo  '<option value="30">30</option>';
	   ?>
	   
		 
	   </select>
	   <sign>-</sign> 
	   <select name="endHour" size=”2”>
		<?php
		for($i = 8; $i < 23; $i++){
			if($i == date('H') + 3){			
				echo '<option value="'.$i.'" selected>'.$i.'</option>';
			}
			else {
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
		}
		?>
	   </select>
	   <sign>:</sign>
	   <select name="endMin" size=”2”>
		  <option value="00">00</option>
		  <option value="30">30</option>
	   </select>			
	</form>
</div>
<br>
				<?php
					echo '<form action ="index.php" method="POST">
					<h5>Név:</h5> <input type="text" id="nameBoxReservation"  name="nev"> <br>
					<h5>E-mail:</h5> <input type="text" id="e-mailBoxReservation" name="reservationEmail"> <br>
					<h5>Megjegyzés:</h5> <textarea name="message" id="messageBoxReservation" cols="40" rows="5"></textarea><br>
					<input type="submit" id="sendReservationButton" value="Lefoglalom"></form>';
				?>
				<?php
				if(isset($_POST['reservationEmail']))
				{
					$to = "nemestamas94@gmail.com";
					$subject = "Foglalás történt az irodafoglaló oldalon keresztül!";
					$txt = $_POST['message'];
					$name = $_POST['nev'];
					$mail = $_POST['reservationEmail'];

					$headers = "From: ".$name." e-mail: ".$mail;
					mail($to,$subject,$txt,$headers);
				}
				?> 
</div>
<?php

	echo '
	<script>
	function moreDetails(a) {
		var x = document.getElementById("moreDetails");
			x.style.display = "block";
		var y = document.getElementById("calendarFrame");
			y.style.display = "none";

		var test = document.getElementById("text_test");
		
		var year = "";
		var month = "";
		var day = "";
		
		var i;
		for (i = 0 ; i < 8; i++){
			if(i < 4)
			{
				year += a.toString()[i];
			} else if ( i < 6) {
				month += a.toString()[i];
			} else {
				if(a.toString()[i+1] == null){
					day += "0";
					day += a.toString()[i];
					break;
					}
					 else
					{
						day += a.toString()[i];
						day += a.toString()[i+1];
						break;
					}
				
			}
		}
		
		var text = year + ". " +	month + ". " + day + ".";
		
		test.innerHTML = text;
	}
	
	function hidePopup() {
		var x = document.getElementById("moreDetails");
			x.style.display = "none";
				var y = document.getElementById("calendarFrame");
			y.style.display = "block";
	}
	</script>	
	';

	$firstDay = strtotime(date("Y").date("m").'01');
	$firstDay = date("D", $firstDay);

	$actualDayNum = date("d");
		
	print '<div id="calendarFrame">';
	
	$honap = "";
	
	if(date("m") == 1){ $honap = "január";}
	else if(date("m") == 2){ $honap = "február";}
	else if(date("m") == 3){ $honap = "március";}
	else if(date("m") == 4){ $honap = "április";}	
	else if(date("m") == 5){ $honap = "május";}
	else if(date("m") == 6){ $honap = "június";}
	else if(date("m") == 7){ $honap = "július";}
	else if(date("m") == 8){ $honap = "augusztus";}
	else if(date("m") == 9){ $honap = "szeptember";}
	else if(date("m") == 10){ $honap = "október";}
	else if(date("m") == 11){ $honap = "november";}
	else { $honap = "december";}
	
	echo '<p id="monthName">'.$honap.'</p>';
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
	$day = 1;
	for($d=1; $d <= 35; $d++){
			if($started == false) {	
				if(	$firstDay=="Mon" && $d == 1 ||
					$firstDay=="Tue" && $d == 2 ||
					$firstDay=="Wed" && $d == 3 ||
					$firstDay=="Thu" && $d == 4 ||
					$firstDay=="Fri" && $d == 5 ||
					$firstDay=="Sat" && $d == 6 ||
					$firstDay=="Sun" && $d == 7 
				){
					if($actualDayNum == $day){
					print '<button type="button" onclick="moreDetails('.date("Y").date("m").$day.')" id="today" class="day">'.$day.'</button>';}
					else {
					print '<button type="button" onclick="moreDetails('.date("Y").date("m").$day.')" class="day">'.$day.'</button>';
					}
					$day++;
					$started = true;
				} else {
					print '<button type="button" disabled class="blankday">'.'</button>';
				}
			}
			else if($started) {
					if($actualDayNum == $day){
					print '<button type="button" onclick="moreDetails('.date("Y").date("m").$day.')" id="today" class="day">'.$day.'</button>';}
					else {
					print '<button type="button" onclick="moreDetails('.date("Y").date("m").$day.')" class="day">'.$day.'</button>';
					}
				$day++;
			}
			
			if($h == 1 || $h == 3 || $h == 5 || $h == 7 || $h == 8 || $h == 10 || $h == 12){
				if($day > 31) $started = false;
			} else if($h == 2) {
				//TODO február
			}
			else {
				if($day > 30) $started = false;
			}
	}
		
		print '<button  id="right">&#10095</button>';
		print '<button  id="left">&#10095</button>';

	print '</div>';
	print '</div>';
?>
<!--NAPTAR END -->				
			</section>
			<section id="connection_section">
				<a name="connection">
				<h2>Lépjen kapcsolatba velünk!</h2>
				<div id="connection-container">
				<?php
					echo '<form action ="index.php" method="POST">
					<p>Név:</p> <input type="text" id="nameBox"  name="nev"> <br>
					<p>E-mail:</p> <input type="text" id="e-mailBox" name="email"> <br>
					<p>Üzenet:</p> <textarea name="message" id="messageBox" cols="40" rows="5"></textarea><br>
					
					<input type="submit" id="sendButton" value="Küldés"></form>';
				?>
				
				<?php
				if(isset($_POST['email']))
				{
					$to = "nemestamas94@gmail.com";
					$subject = "Automatikus üzenet az irodafoglalón keresztül";
					$txt = $_POST['message'];
					$name = $_POST['nev'];
					$mail = $_POST['email'];

					$headers = "From: ".$name." e-mail: ".$mail;
					mail($to,$subject,$txt,$headers);
				}
				?> 
				</div>
			</section>
		</main>
		<footer>
			<div id="footer_div"></div>
			<a href="http://cyrio.hu"><h4>cyrio.hu</h4></a>	
		</footer>
		<script src="slide.js"> </script>
	</body>
</html>