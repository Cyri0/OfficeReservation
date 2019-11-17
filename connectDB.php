			<?php


			// lookup all hints from array if $q is different from ""

			$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
			
			// get the q parameter from URL
			$q = $_REQUEST["q"];
			fwrite($myfile, $q);
			
			?>