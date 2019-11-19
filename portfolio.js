// Functie voor de over mij foto
var teller = 0;
function groter() {
	teller++;
	if(teller == 1) {
		document.getElementById('om').style.width = "70%";
		document.getElementById('om').style.height = "70%";
	} else {
		document.getElementById('om').style.width = "40%";
		document.getElementById('om').style.height = "50%";
		teller = 0;
	}
}


function lezen() {
	var vnaam = document.getElementById("vnaam").value;
	var anaam = document.getElementById("anaam").value;
	var email = document.getElementById("email").value;
	var onderwerp = document.getElementById("onderwerp").value;
	var vraag = document.getElementById("vraag").value;
	document.write(vnaam+ '<br>');
	document.write(anaam+ '<br>');
	document.write(email+ '<br>');
	document.write(onderwerp+ '<br>');
	document.write(vraag);
}