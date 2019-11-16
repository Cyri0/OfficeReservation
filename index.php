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
							<h3>dolor si amet</h3>
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
			<script src="slide.js"> </script>

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

				<h2 class="dark">Tekintse át szolgáltatásainkat!</h2>
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
				<div id="calendar">	</div>			
				<script src="calendar.js"> </script>

			</section>
		</main>
		<footer id="footer">
			<a name="connection">
			<div id="footer_title">
			<p>Vegye fel velünk a kapcsolatot!</p>
			</div>
			<div id="footerBox">
				<div id="footerTextHolder">
				Címünk:</br>
				4026 Debrecen Mester u. 38.<br><br>
				Telefonszám:<br>
				06/30 555 555
				</div>
				<div id="connection-container">
				<form action ="index.php" method="POST">
						<div id="leftConnection">
							<input type="text" id="nameBox" placeholder="Név:"  name="nev"> <br>
							<input type="text" id="e-mailBox" placeholder="Email:" name="email">
						</div>
						<div id="rightConnection">
							<textarea name="message" id="messageBox" placeholder="Üzenet:" cols="40" rows="5"></textarea>
						</div>
				<input type="submit" id="sendButton" value="Elküldöm">
				</form>
				
					
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
			</div>		
			<div id="downLine">
			<h4>© 2019 TORB. Minden jog fenntartva.</h4>
			</div>			
		</footer>
	</body>
</html>