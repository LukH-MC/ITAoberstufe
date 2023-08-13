var i, imgs, pic;   										//globale Variablen

function rotieren(){
	pic.src = imgs[i];									// Der Inhalt von pic ist ein Element des Arrays imgs
	if(i===(imgs.length-1)){						// wenn i noch nicht den Wert des letzten Elements des Arrays
		i = 0;													// imgs erreicht hat, wird i um 1 erhöht
		}
		else{
			i++;
		}	
	setTimeout(rotieren,1000);				// rekursiver Aufruf => die Funktion ruft sich selber auf
	}

// **************************************   

function init()
{
  pic = document.getElementById("bilder");   // pic wird in div "bilder" dargestellt
 
  imgs = [ "Ente.png", "Palme.jpg", "Blume.png", "Tuer.jpg" ] ;  // Initialisieren des Arrays imgs

  var bildervorrat= new Array();
  for( i=0; i< imgs.length; i++ )					// Alle vorhandenen Bilder des Arrays imgs werden in ein
  {																// weiteres Array "Bildervorrat" geladen. Grund: Die Groesse
    bildervorrat[ i ] = new Image();				// dieses Arrays muss nicht bestimmt werden. Es wird so groß,
    bildervorrat[ i ].src = imgs[ i ];				// wie es der Anzahl der vorhandenen Bilder entspricht.
  }
  i=0;
  rotieren();
}

onload=init;
