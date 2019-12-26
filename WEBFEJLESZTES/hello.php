<?php

pwIsValid("katika@gmail.com","katica85");


function pwIsValid($name,$pwd){
    $myfile = fopen("password.txt", "r") 
    or die("Unable to open file!");
    $all ="";
    while(! feof($myfile))  {
        $result = fgets($myfile);
        if(strlen($result) == 0) break;
        $decoded = decode($result);

        echo($decoded."<br>");
       // list($email, $jelszo) = explode('*', $decoded);
       // echo("Email: ".$email."<br>Jelszó: ".$jelszo."<br>");
    }
    fclose($myfile);
    return false;
}

function decode($line){
    $decodedLine = "";

    for($i = 0; $i < strlen($line); $i++){
        if($i%5 == 0){
            $decodedLine = $decodedLine.chr(toNumber($line[$i]) - 5);
        }
        if($i%5 == 1){
            if(127 < toNumber($line[$i]) + 14){
                $final = chr(95 + (14 - (127 - toNumber($line[$i]))));
            } else {
            $decodedLine = $decodedLine.chr(toNumber($line[$i]) + 14); // SOK HIBA
            }
        }
        if($i%5 == 2){
            $decodedLine = $decodedLine.chr(toNumber($line[$i]) - 31);
        }
        if($i%5 == 3){
            if(127 < toNumber($line[$i]) + 9){
                $final = chr(95 + (9 - (127 - toNumber($line[$i]))));
            } else {
            $decodedLine = $decodedLine.chr(toNumber($line[$i]) + 9);
            }
        }
        if($i%5 == 4){
            $decodedLine = $decodedLine.chr(toNumber($line[$i]) - 3);
        }
    }

    return $decodedLine;
}

function toNumber($dest){
    if ($dest)
        return ord(strtolower($dest));
    else
        return 0;
}
?>