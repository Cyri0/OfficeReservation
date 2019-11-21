for(var i = 1; i <= 24; i++){
	document.getElementById("calendar").innerHTML += '<div class="day" onclick="dayClicked('+i+')">'+i+'.</div>';
}

function dayClicked(i){
	
	var d = new Date();

	if(i == d.getUTCDate()){
		document.getElementById("info").innerHTML = "Az ajtó kinyílik...";
		open(i);
	} else {
		document.getElementById("info").innerHTML = "Ez nem a mai nap! Ne csalj!";
	}
}

function open(i){
switch(i) {
  case 1:
    // code block
    break;
  case 2:
    // code block
    break;
  case 3:
    // code block
    break;
  case 4:
    // code block
    break;
  case 5:
    // code block
    break;
  case 6:
    // code block
    break;
  case 7:
    // code block
    break;
  case 8:
    // code block
    break;
  case 9:
    // code block
    break;
  case 10:
    // code block
    break;
  case 11:
    // code block
    break;
  case 12:
    // code block
    break;
  case 13:
    // code block
    break;
  case 14:
    // code block
    break;
  case 15:
    // code block
    break;
  case 16:
    // code block
    break;
  case 17:
    // code block
    break;
  case 18:
    // code block
    break;
  case 19:
    // code block
    break;
  case 20:
    document.getElementById("info").innerHTML = '<a href="">KATTINTS RÁM!</a>';
    break;
  case 21:
    // code block
    break;
  case 22:
    // code block
    break;
  case 23:
    // code block
    break;
  case 24:
    // code block
    break;
  default:
    // code block
} 
}