<html>
	<head>
		<title>Alma</title>
		

	</head>
	<body>
	
	<form>
	
		<script>

		function showHint() {
				var first = document.getElementById("firstname").value;
				var second = document.getElementById("lastname").value;
				var sendable = first + second;
				
				var xmlhttp = new XMLHttpRequest();
				
				xmlhttp.onreadystatechange = function() {
					//if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtHint").innerHTML = this.responseText;
					//}
				};
				xmlhttp.open("GET", "test.php?q=" + sendable, true);
				xmlhttp.send();
				alert("a");
		}
		</script>
		First name:<br>
		<input type="text" id="firstname" name="firstname">
		<br>
		Last name:<br>
		<input type="text" id="lastname" name="lastname">
		<br><br>
		<input type="submit" onclick="showHint()" value="Submit">
	</form> 
	<p>Suggestions: <span id="txtHint"></span></p>
	</body>
</html>