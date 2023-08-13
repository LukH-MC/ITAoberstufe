<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
 <head>
  <title>Stringfunktionen: Ausgabe</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="de" />
  <link type = "text/css" rel = "stylesheet" href = "style.css" />
 </head>
	
	<body>
	
		<h1>Ausgabe </h1>
		<?php
			
			echo "Untersuchen 1. string <br /><br />";
			echo "<table>";
			echo "<thead> <td width='100'>Funktion</td> <td width='250'>Erl&auml;uterung</td> <td width='200'>Ergebnis </td> </thead>";
			echo "<tr> <td>&nbsp;</td> <td>1. string</td> <td>". $_POST['satz'] .  "</td> </tr>";
			echo "<tr><td></td><td></td><td></td></tr>";
			
			$lae = strlen($_POST['satz']);
			echo "<tr> <td>strlen</td> <td>L&auml;nge</td> <td>$lae </td> </tr>";
			
			$kle = strtolower($_POST['satz']);
			echo "<tr> <td>strtolower</td> <td>Nur Kleinbuchstaben</td> <td>$kle </td> </tr>";
			
			$gro = strtoupper($_POST['satz']);
			echo "<tr> <td>strtoupper</td> <td>Nur Gro&szlig;buchstaben</td> <td>$gro </td> </tr>";
			
			$rue = strrev($_POST['satz']);
			echo "<tr> <td>strrev</td> <td>R&uuml;ckw&auml;rts</td> <td>$rue </td> </tr>";
						
			echo "</table>";
		
		
			echo "<br />";
			echo "Vergleichen mit 2. string bzw. einzelnem Zeichen <br /><br /><table>";
			echo "<thead> <td width='100'>Funktion</td> <td width='250'>Erl&auml;uterung</td> <td width='200'>Ergebnis </td> </thead>";
			echo "<tr> <td>&nbsp;</td> <td>1. string</td> <td>". $_POST['satz'] .  "</td> </tr>";
			echo "<tr> <td>&nbsp;</td> <td>2. string</td> <td>". $_POST['vsatz'] .  "</td> </tr>";
			echo "<tr> <td>&nbsp;</td> <td>einzelnes Zeichen</td> <td>". $_POST['zeichen'] .  "</td> </tr>";
			echo "<tr><td></td><td></td><td></td></tr>";
			
			$strpos = strpos($_POST['satz'],$_POST['vsatz'],$_POST['zeichen']);
			echo "<tr> <td>strpos</td> <td>2. string befindet sich ab x. Zeichen auf Position</td> <td>$strpos </td> </tr>";
			
			$x = similar_text($_POST['satz'],$_POST['vsatz'],$proz);
			echo "<tr> <td>similar_text</td> <td>Anzahl gleicher Zeichen zwischen 1. und 2. string</td> <td>$proz </td> </tr>";
			
			$strgleich = strspn($_POST['satz'],$_POST['vsatz']);
			echo "<tr> <td>strspn</td> <td>Anzahl &Uuml;bereinstimmungen ab 1. Zeichen</td> <td>$strgleich </td> </tr>";
			
			$strungleich = strcspn($_POST['satz'],$_POST['vsatz']);
			echo "<tr> <td>strcspn</td> <td>Anzahl Differenzen ab 1. Zeichen</td> <td>$strungleich </td> </tr>";
			
			echo "</table>";
			
			echo "<br />";
			echo "Zeichen finden<br /><br /><table>";
			echo "<thead> <td width='100'>Funktion</td> <td width='250'>Erl&auml;uterung</td> <td width='200'>Ergebnis </td> </thead>";
			echo "<tr> <td>&nbsp;</td> <td>1. string</td> <td>". $_POST['satz'] .  "</td> </tr>";
			echo "<tr> <td>&nbsp;</td> <td>2. string</td> <td>". $_POST['vsatz'] .  "</td> </tr>";
			echo "<tr> <td>&nbsp;</td> <td>einzelnes Zeichen</td> <td>". $_POST['zeichen'] .  "</td> </tr>";
			echo "<tr> <td>&nbsp;</td> <td>einzelnes Zeichen</td> <td>". $_POST['ascii'] .  "</td> </tr>";
			echo "<tr><td></td><td></td><td></td></tr>";
			
			$asciiwert = ord($_POST['zeichen']);
			echo "<tr> <td>ord</td> <td>Zeichen hat Asciiwert</td> <td>$asciiwert </td> </tr>";
			
			$zei = chr($_POST['ascii']);
			echo "<tr> <td>chr</td> <td>Asciiwert erzeugt Zeichen</td> <td>$zei </td> </tr>";			
			echo "</table>";
			
			echo "<br />";
			echo "Leerzeichen<br /><br /><table>";
			echo "<thead> <td width='100'>Funktion</td> <td width='250'>Erl&auml;uterung</td> <td width='200'>Ergebnis </td> </thead>";
			echo "<tr> <td>&nbsp;</td> <td>1. string</td> <td>". $_POST['satz'] .  "</td> </tr>";
			echo "<tr> <td></td> <td>L&auml;nge</td> <td>$lae </td> </tr>";
			echo "<tr><td></td><td></td><td></td></tr>";
			
			$vorneweg = ltrim($_POST['satz']);
			$laevorneweg = strlen($vorneweg);
			echo "<tr> <td>ltrim</td> <td>Leerzeichen am Anfang gel&ouml;scht</td> <td>$vorneweg </td> </tr>";
			echo "<tr> <td></td> <td>erneute L&auml;nge</td> <td>$laevorneweg </td> </tr>";
			$hintenweg = rtrim($_POST['satz']);
			$laehintenweg = strlen($hintenweg);
			echo "<tr> <td>rtrim</td> <td>Leerzeichen am Ende gel&ouml;scht</td> <td>$hintenweg </td> </tr>";
			echo "<tr> <td></td> <td>erneute L&auml;nge</td> <td>$laehintenweg </td> </tr>";
			$weg = trim($_POST['satz']);
			$laeweg = strlen($weg);
			echo "<tr> <td>trim</td> <td>Leerzeichen vorne und hinten gel&ouml;scht</td> <td>$weg </td> </tr>";
			echo "<tr> <td></td> <td>erneute L&auml;nge</td> <td>$laeweg </td> </tr>";
			echo "</table>";
			
			echo "<br />";
			echo "mit Arrays umgehen<br /><br /><table>";
			echo "<thead> <td width='100'>Funktion</td> <td width='250'>Erl&auml;uterung</td> <td width='200'>Ergebnis </td> </thead>";
			echo "<tr> <td>&nbsp;</td> <td>1. string</td> <td>". $_POST['satz'] .  "</td> </tr>";
			echo "<tr><td></td><td></td><td></td></tr>";
		
			$exp= explode($_POST['zeichen'], $_POST['satz']);
			echo "<tr> <td>explode</td> <td>Inhalt array</td> <td>";
			$i = 1;
			foreach($exp as $teil){ 
				echo $i . '. '. $teil .' '; 
				$i++;
			}
			echo "</td> </tr>";
			
			$imp= implode("-", $exp);
			echo "<tr> <td>implode</td> <td>Inhalt string</td> <td>$imp</td> </tr>";
			echo "</table>";
		
		
		
		?>
		<br /><br />
		<form method="POST" action="Demo_String.php">
			<input type="submit" value="zur&uuml;ck zur Eingabe" />
		</form> 
		
	</body>

</html>






	