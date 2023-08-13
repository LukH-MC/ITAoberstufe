/*function gruss(){
	window.alert("Hallo");
	}
*/

var pop;    										//globale Variable

function zeigePop(){
	pop.style.visibility = "visible";
	}
	
function blendePopaus(){
	pop.style.visibility = "hidden";
	}

// **************************************   Objekt wird initialisiert
function init(){
	pop = document.getElementById("popUpbereich");
	pop.style.visibility = "hidden";	
	
	var obj;
	obj = document.getElementById("konstanterBereich");
	obj.onmouseover = zeigePop;
	
	}
	
onload=init;


