<html>
    <head>
        <title>Bejelentkezés</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
		<html lang="hu">
		<link rel="stylesheet" href="style.css">
	</head>
    <body>
        <div id="mainDiv">
            <div id="loginDiv">
            <div id="pictureHolder"></div>
            <div id="topFromLoginForm"></div>
            <form action="index.php" class="loginForm" method="post">
                <p>Email:&nbsp;</p>
                <input type="text" name="name"><br>
                <p>Pass:&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <input type="password" name="password"><br>
                <input id="loginButton" name="submit" type="submit" value="Login">
            </form>
            </div>
        </div>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pwd = $_POST['password'];
    echo ($name." ".$pwd);
    if(!pwIsValid($name,$pwd)){
        //sleep(3);
        header("Location:http://police.hu");
    }
}

function pwIsValid($name,$pwd){
    $myfile = fopen("password.txt", "r") 
    or die("Unable to open file!");
    $all ="";
    while(! feof($myfile))  {
        $result = fgets($myfile);
        if(strlen($result) == 0) break;
        $decoded = decode($result);

        list($email, $jelszo) = explode('*', $decoded);
        echo("Email: ".$email."<br>Jelszó: ".$jelszo."<br>");

        if($name == $email){
            echo($pwd." , ".$jelszo);
            if($pwd == $jelszo){
                callDB($name);
                return true;
            } else{
            return false;
            }
        }
        echo("<br>");
    }
    fclose($myfile);
    return false;
}

function decode($line){
    $decodedLine = "";
    for($i = 0; $i < strlen($line)-1; $i++){
        $final;
        if($i%5 == 0) {
            $num = toNumber($line[$i]);
           
            $num -= 5;
            $final = chr($num);
            
        } elseif ($i%5 == 1) {

            $num = toNumber($line[$i]);
            if(127 < $num + 14){
                $final = chr(95 + (14 - (127 - $num)));
            } else{
            $num -= -14;
            $final = chr($num);
            }
            
        } elseif ($i%5 == 2) {

            $num = toNumber($line[$i]);
            
            $num -= 31;
            $final = chr($num);
        } elseif ($i%5 == 3) {

            $num = toNumber($line[$i]);
            if(127 < $num + 9){
                $final = chr(95 + (9 - (127 - $num)));
            } else{
            $num -= -9;
            $final = chr($num);
            }
        } elseif ($i%5 == 4) {

            $num = toNumber($line[$i]);
            $num -= 3;
            $final = chr($num);
        }
        $decodedLine = $decodedLine.$final;
    }

    return $decodedLine;
}

function toNumber($dest){
    if ($dest)
        return ord(strtolower($dest));
    else
        return 0;
}

function callDB($name){
    $link = mysqli_connect("localhost", "root","")
    or die("nem sikerült kapcsolódni az adatbázishoz");

    mysqli_select_db($link, "adatok")
    or die("nem sikerült kiválasztani az adatbázist");
    
    $sql = "select Username, Titkos from tabla";
    $ered = mysqli_query($link,$sql);
    echo ("<br><br>ADATBÁZIS:<br>");
    while($eredmeny= mysqli_fetch_row($ered)){
        if(strcmp($name, $eredmeny[0]) == 0){
            echo($eredmeny[1]);
            makeThings($eredmeny[1]);
        }
    }
}

function makeThings($szin){
    $color ="";
    $image ="";

    if($szin == "piros"){
        $image="piros.png";
        $color ="#FF0000";
    }
    elseif($szin == "zold"){
        $image="zold.png";
        $color ="#00FF00";
    }
    elseif($szin == "sarga"){
        $image="sarga.png";
        $color ="yellow";
    }
    elseif($szin == "kek"){
        $image="kek.png";
        $color ="#0000FF";
    }
    elseif($szin == "fekete"){
        $image="fekete.png";
        $color ="black";
    }
    elseif($szin == "feher"){
        $image="feher.png";
        $color ="white";
    }

    echo($image);
    echo('
    <script>
    change();
    function change(){
        var a = document.getElementById("pictureHolder");
        a.style.backgroundImage="url(http://cyrio.hu/WEBFEJLESZTES/'.$image.')";
        a.style.boxShadow  = "0px 0px 20px '.$color.'";
        }
    </script>
    ');
}
?>

</body>
</html>