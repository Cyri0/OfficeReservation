			<?php
			
				$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
				
				// get the q parameter from URL
				$q = $_REQUEST["q"];
							
				list($date,$name,$email,$msg,$sH,$sM,$fH,$fM) = explode (";",$q);
			
				$toFile = "Dátum: ".$date."\nNév: ".$name."\nEmail: ".$email."\nÜzenet: ".$msg."\nIdőtartam: ".$sH.":".$sM."-".$fH.":".$fM;
				fwrite($myfile, $toFile);
				emailSend($toFile, $email, $name);
				
				
				
				function emailSend($sendable, $email, $name){
						$to = "nemestamas94@gmail.com";
						$subject = "Foglalás történt a TORB.hu irodafoglalón keresztül!";
						$headers = "From: ".$name." e-mail: ".$email;
						mail($to,$subject,$sendable,$headers);					
				}
				
				
			?>