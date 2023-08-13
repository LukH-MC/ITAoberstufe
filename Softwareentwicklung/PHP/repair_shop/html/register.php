<html>
	<head>
	    <link type="text/css" rel="stylesheet" href="../style.css">
	    <title>Reparaturservice</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/vnd.microsoft.icon" href="../img/favicon.ico"> <!-- http://comandella.at/inhalt/uploads/2016/05/reparatur-icon.png -->
	</head>

	<body>
        <div id="head">
            <h1> Reparaturservice </h1>
        </div>
        <div class="topnav">
                <a href="../index.php">Startseite</a>
                <a href="about.php">Über Uns</a>
                <a href="contact.php">Kontakt</a>
                <a href="login.php">Reparatur Formular</a>
                <a href="login.php">Login</a>
				<a href="register.php">Registrierung</a>
        </div>
        <div class="content">
            <form action = "index_login=true.php" method="post" class="register">
                <table class="register">
                    <tr><td> Geschlecht </td><td><select name="anrede" size="1"> 
                                
                        <option> --- </option>
                        <option> Herr </option>
                        <option> Frau </option>
                        <option> Divers </option>
                            
                    </select></td></tr>
                    <tr><td> Name </td><td><input type="text" name="name" placeholder="Name"/></td></tr>
                    <tr><td> Vorname </td><td><input type="text" name="vorname" placeholder="Vorname"/></td></tr>
                    <tr><td> PLZ & Ort </td><td><input type="number" name="plz" placeholder="PLZ" min="00001" max="99999"/></td><td><input type="text" name="ort" placeholder="Ort"/></td></tr>
                    <tr><td> Stra&szlig;e & Hausnummer</td><td><input type="text" name="straße" placeholder="Stra&szlig;e"/></td><td><input type="text" name="hausnum" placeholder="Hausnummer"/></td></tr>
                    <tr><td> Email </td><td><input type="email" name="email" placeholder="Email"/></td></tr>
                    <tr><td>Passwort</td><td><input type="password" name="password" placeholder="Passwort"/></td><td><input type="password" name="password_check" placeholder="Passwort wiederholen"/></td></tr>
                </table>		
                <br /> 	
                <p><input type="submit" name="submit" value="Registrieren" /> <input type="reset" /></p><br />
        </div>
                
            
            </form>
	</body>
</html>