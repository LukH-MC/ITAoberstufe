<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>metos gmbh</title>
</head>
<body>
    <header>
        <h1>Bewerbung</h1>
        <img src="img/logo_metos.png" alt="logo">
        <div style="clear: both;"></div>
    </header>
    <nav>
        <a href="index.html">Home</a>
        <a href="produkte.html">Produkte</a>
        <a href="unternehmen.html">Unternehmen</a>
        <a href="engagement.html">Engagement</a>
        <a href="bewerbung.php">Stellenangebote</a>
    </nav>
    <main>
        <div style="padding: 20px">
            <h2>Bitte geben Sie Ihre Daten ein:</h2>
            <form action="" method="POST">
                <label for="vn">Ihr Vor- und Nachname?</label><br>
                <input type="text" name="vorname">
                <input type="text" name="nachname">
                <br>
                <label for="stelle">Interesse an einer Stelle als:</label><br>
                <select name="stelle">
                    <option value="" selected></option>
                    <option value="Manager/in">Manager/in</option>
                    <option value="Netzwerktechniker/in">Netzwerktechniker/in</option>
                    <option value="Verkäufer/in">Verkäufer/in</option>
                </select>
                <br>
                <label for="standort">Bevorzugter Standort?</label><br>
                <input type="radio" name="standort" value="Düsseldorf"> Düsseldorf
                <input type="radio" name="standort" value="Hamburg"> Hamburg
                <input type="radio" name="standort" value="München"> München
                <br>
                <label for="dauer">Dauer Ihrer bisherigen Berufserfahrung?<br>(Bitte geben Sie eine Zahl zwischen 1 und 30 Jahren ein.)</label><br>
                <input type="text" name="dauer">
                <br>
                <input type="reset" name="delete" value="Löschen">
                <input type="submit" name="submit" value="Abschicken">
            </form>

            <?php
                if (isset($_POST["submit"])) {
                    $err = false;
                    if (empty($_POST["nachname"])) {
                        echo "<li>Bitte tragen sie ihren Nachnamen ein!</li>";
                        $err = true;
                    }
                    if ((int)$_POST["dauer"] > 30 || (int)$_POST["dauer"] < 1) {
                        echo "<li>Bitte geben Sie eine gültige Dauer Ihrer Berufserfahrung ein!</li>";
                        $err = true;
                    }
                    if (!$err) {
                        echo "Ihre Bewerbung wurde erfolgreich weitergeleitet!<br>";
                        $bnr = strtoupper(substr($_POST["vorname"], 0, 1) . substr($_POST["nachname"], 0, 1)) . round(time() * 0.0000001, 0);
                        echo "Sie haben folgende persönliche Bewerbernummer erhalten: <div class='bnr'>" . $bnr ."</div>.<br>";
                        echo "Bitte geben Sie sie bei allen zukünftigen Emails oder Briefen ein.";

                        $txt = fopen("log/bewerbungen.txt", "a");
                        fwrite($txt, ucfirst($_POST["vorname"]) . "\t" . ucfirst($_POST["nachname"]) . "\t" . $_POST["stelle"] . "\t" . $_POST["standort"] . "\t" . $_POST["dauer"] . "\t" . date("d.m.Y") . "\t" . $bnr . "\n");
                    }
                }
            ?>

            <footer>
                <a href="">Impressum</a>
                <a href="">Disclaimer</a>
            </footer>
        </div>
    </main>
</body>
</html>
