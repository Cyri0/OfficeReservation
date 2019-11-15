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
	//TODO FEBRUÁR!
	var daysNum = monthLengths[currentDay.getMonth()];
	
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

function writeButtons(){
	
	document.getElementById('calendar').innerHTML += '<div id="elozo" class="calendarButton" onclick="prevMonth()">&#10094</div>';
	document.getElementById('calendar').innerHTML += '<div id="kovetkezo" class="calendarButton" onclick="nextMonth()">&#10095</div></div>';
}

function dateGet(choosen){
	alert(currentDay.getFullYear() + "/" + (currentDay.getMonth()+1) + "/" + choosen);
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