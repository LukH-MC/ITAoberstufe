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
			<form action = "index_login=true.php" method="post" class="login">
                <table class="login">
                    <tr><td>E-Mail</td><td><input type="email" name="mail" placeholder="E-Mail"/></td></tr>
                    <tr><td>Passwort</td><td><input type="password" name="password" placeholder="Passwort"/></td></tr>
                </table>		
                <br /> 	
                <p><input type="submit" name="submit" value="Login" /> <input type="reset" /></p><br />
		</div>
	</body>
</html>