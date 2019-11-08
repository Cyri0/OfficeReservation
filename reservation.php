<?php
$to = "nemestamas94@gmail.com";
$subject = "Foglalás történt!";
$txt = $_POST['message'];
$name = $_POST['nev'];
$mail = $_POST['email'];

$headers = "From: ".$name." e-mail: ".$mail;
mail($to,$subject,$txt,$headers);

echo $to.'<br>'.$subject.'<br>'.$txt.'<br>'.$name.'<br>'.$mail.'<br>'.$headers;
?> 