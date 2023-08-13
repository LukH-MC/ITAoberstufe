var objekt;    										//globale Variable

// ************************************** Funktionen für Mausverhalten über Objekt
function over(){
	objekt.style.background = "yellow";
	}


// **************************************   Objekt wird initialisiert
function init(){
	objekt = document.getElementById("aktiv"); 
															//"Objekt" wird gleichgesetzt mit Bereich "aktiv"
	objekt.style.width = "100px";			//Eigenschaften des Objekts
	objekt.style.background = "aqua";
	objekt.style.textAlign = "center";
	
	objekt.onmouseover = over;
	objekt.onmousedown = down;
	objekt.onmouseup = up;
	objekt.onmouseout = out;
	}
	
onload=init;


