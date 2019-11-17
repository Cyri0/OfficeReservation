var currentDay = new Date();
setUpTheCalendar();

function setUpTheCalendar(){
	writeActualYearAndMonth(currentDay);
	writeDayNames();
	writeDays();
}

function writeActualYearAndMonth(d){
	writeButtons();
	document.getElementById('calendar').innerHTML += '<div id="year">' + d.getFullYear() + '</div>';
	var monthNames = ["január", "február", "március", "április", "május", "június", "július", "augusztus", "szeptember", "október", "november", "december"];
	var thisMonth = monthNames[d.getMonth()];
	document.getElementById('calendar').innerHTML += '<div id="monthName">' + thisMonth + '</div>';
}

function writeDayNames(){
	var dayNames = ["H", "K", "Sz", "Cs", "P", "Sz", "V"];
	dayNames.forEach(element => addDay(element));
}

function addDay(element) {
	document.getElementById('calendar').innerHTML += '<div class="day">' + element + '</div>';
}

function writeDays(){
	var monthLengths = [31,28,31,30,31,30,31,31,30,31,30,31];
	
	var daysNum = monthLengths[currentDay.getMonth()];
	
	if(currentDay.getMonth() == 1 && leapYearCheck(currentDay.getFullYear())){
				daysNum += 1;
	}
	
	var firstDayOfMonth = currentDay;
	firstDayOfMonth.setDate(1);
		
	if(firstDayOfMonth.getDay() == 0) {
		for(i = 0; i < 6; i++){
			document.getElementById('calendar').innerHTML += '<div class="dayNum""> </div>';
		}
	} else {
		for(i=0; i<firstDayOfMonth.getDay()-1; i++){
			document.getElementById('calendar').innerHTML += '<div class="dayNum""> </div>';
		}
	}

	
	for(i=1; i<=daysNum;i++){
		document.getElementById('calendar').innerHTML += '<div class="dayNum" onclick="dateGet(' + i + ')">' + i + '</div>';
	}
}

function leapYearCheck(year){
	if(year%4 == 0)
    {
        if( year%100 == 0)
        {
            if ( year%400 == 0)
                return true;
            else
                return false;
        }
        else
            return true;
    }
    else
        return false;
}

function writeButtons(){
	
	document.getElementById('calendar').innerHTML += '<div id="elozo" class="calendarButton" onclick="prevMonth()">&#10094</div>';
	document.getElementById('calendar').innerHTML += '<div id="kovetkezo" class="calendarButton" onclick="nextMonth()">&#10095</div></div>';
}

function nextMonth(){
	currentDay.setMonth(currentDay.getMonth()+1);
	document.getElementById('calendar').innerHTML = "";
	setUpTheCalendar()
}

function prevMonth(){
	currentDay.setMonth(currentDay.getMonth()-1);
	document.getElementById('calendar').innerHTML = "";
	setUpTheCalendar();
}

function dateGet(choosen){
	document.getElementById('calendar').innerHTML = "";
	initReservationMenu(choosen);
}

function sendBackToCalendar(){
	document.getElementById('calendar').innerHTML = "";
	setUpTheCalendar();
}

function addToCal(text){
	document.getElementById('calendar').innerHTML += text;
}

function initReservationMenu(choosen){
	var current = currentDay;
	addToCal('<div id="back" class="calendarButton" onclick="sendBackToCalendar()">&#10094</div>');
	
	addToCal('<div id="calendarTitle">Foglalás</div>');

	
	var dateText;
	var res_month = (current.getMonth() + 1);
	var res_day = choosen;
	if(current.getMonth() < 10){ res_month = '0' + (current.getMonth()+1); }
	if(choosen < 10){	res_day = '0' + choosen; }

	dateText= current.getFullYear() + '.' + res_month + '.' + res_day + '.';

	addToCal('<div id="choosenDate">'+dateText+ '</div>');

	addToCal('<div id="text">Időpont: </div>');
	addToCal('<select class="timeSelect" id="startHourSelect"></select>');
		
	for(i = 8; i <= 22; i++){
		if(i== currentDay.getHours()+1){
			if(i<10){
			document.getElementById('startHourSelect').innerHTML += '<option value="'+i+'" selected>0'+i+'</option>';
			}
			else {
				document.getElementById('startHourSelect').innerHTML += '<option value="'+i+'" selected>'+i+'</option>';
			}
		} else
		{
			if(i<10){
				document.getElementById('startHourSelect').innerHTML += '<option value="'+i+'">0'+i+'</option>';
			}
			else {
				document.getElementById('startHourSelect').innerHTML += '<option value="'+i+'">'+i+'</option>';
			}
		}
	}
	addToCal(' :');	
	addToCal('<select class="timeSelect" id="startMinSelect">'+
	'<option value="0">00</option>'+
	'<option value="0">30</option>'+
	'</select>');
	
	addToCal(' -');
	
	addToCal('<select class="timeSelect" id="endHourSelect"></select>');
	for(i = 8; i <= 22; i++){
		
		if(i== currentDay.getHours()+2)
		{
			if(i<10){
				document.getElementById('endHourSelect').innerHTML += '<option value="'+i+'" selected>0'+i+'</option>';
			}
			else {
				document.getElementById('endHourSelect').innerHTML += '<option value="'+i+'"selected>'+i+'</option>';
			}
		}
		else
		{
			if(i<10){
				document.getElementById('endHourSelect').innerHTML += '<option value="'+i+'">0'+i+'</option>';
			}
			else {
				document.getElementById('endHourSelect').innerHTML += '<option value="'+i+'">'+i+'</option>';
			}
		}
	}
	addToCal(' :');
	addToCal('<select class="timeSelect" id="endMinSelect">'+
	'<option value="0">00</option>'+
	'<option value="0">30</option>'+
	'</select>');
	
	addToCal('<form action ="index.php" method="POST">');
	addToCal('<input type="text" id="nameBoxRES" placeholder="Név:"  name="nev">')
	addToCal('<input type="text" id="e-mailBoxRES" placeholder="Email:" name="email">');
	addToCal('<textarea name="message" id="messageBoxRES" placeholder="Üzenet:" cols="40" rows="5"></textarea>');
	addToCal('<input type="submit" id="sendButtonRES" onclick="booking()" value="Lefoglalom">');
	addToCal('</form>');
}

//FOGLALÁST CSINÁLJA, ÜZEN A PHP-NAK!!!
function booking() {
				var first = document.getElementById("nameBoxRES").value;
				var second = document.getElementById("e-mailBoxRES").value;
				var third = document.getElementById("messageBoxRES").value;
				var start = document.getElementById('startHourSelect').value;
				
				var sendable = first +';'+ second +';' + third +';'+ start+';';
				
				var xmlhttp = new XMLHttpRequest();
				
				xmlhttp.onreadystatechange = function() {
					document.getElementById("txtHint").innerHTML = this.responseText;
				};
				xmlhttp.open("GET", "connectDB.php?q=" + sendable, true);
				xmlhttp.send();
	addToCal("<div>SIKERES FOGLALÁS!</div>");
		}