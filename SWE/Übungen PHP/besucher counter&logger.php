<?php declare(strict_types=1);
session_start();

const DATAFILE = __DIR__."/einstieg-data.txt";
$inputErrors = [];
$userdata = [];

//create log file
if (!file_exists(DATAFILE)) {
    file_put_contents(DATAFILE, "Zeitpunkt, Vorname, Nachname, Email\n", flags: FILE_APPEND);
}

if (isset($_COOKIE["einstieg"])) {
    $userdata = explode(", ", $_COOKIE["einstieg"]);
}

//if post contains data, process it
if (!empty($_POST)) {
    if (!isset($_POST["firstName"]) || !is_string($_POST["firstName"])) $inputErrors[] = "Ein Vorname wird in Textform wird benötigt";
    else if (strlen($_POST["firstName"]) < 2 || strlen($_POST["firstName"]) > 32) $inputErrors[] = "Der Vorname muss zwischen 2 und 32 zeichen lang sein";

    if (!isset($_POST["lastName"]) || !is_string($_POST["lastName"])) $inputErrors[] = "Ein Nachname wird in textform wird benötigt";
    elseif (strlen($_POST["lastName"]) < 2 || strlen($_POST["lastName"]) > 32) $inputErrors[] = "Der Nachname muss zwischen 2 und 32 zeichen lang sein";

    if (!isset($_POST["email"]) || !is_string($_POST["email"])) $inputErrors[] = "Eine Email wird benötigt";
    else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $inputErrors[] = "Die Email enthält ungültige Zeichen";

    //as data is correct, save it to cookie snd to file and redirect
    $dataString = $_POST["firstName"] .", ". $_POST["lastName"] .", ". $_POST["email"];
    if (empty($inputErrors)) {
        setcookie("einstieg", $dataString);
        file_put_contents(
                DATAFILE,
                date("Y-m-d H:i:s.v") .", ". $dataString ."\n",
                flags: FILE_APPEND
        );
        $_SESSION["username"] = $_POST["firstName"];
        header("Location: einstieg-shop.php");
        echo "<p>Fehler beim Weiterleiten:</p></p><a href ='einstieg-shop.php'>klicke hier</a>";
        exit;
    }
}


?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Einstiegsaufgabe</title>
</head>
<body>
    <h3>Anmeldung</h3>
    <form method="post" action="einstieg.php">
        <label for="firstName">Vorname:</label>
        <input type="text" name="firstName" min="2" max="32" value="<?=$userdata[0]??''?>">
        <label for="lastName">Nachname:</label>
        <input type="text" name="lastName" min="2" max="32" value="<?=$userdata[1]??''?>">
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?=$userdata[2]??''?>">
        <button type="submit">Bestätigen</button>
        <br>
        <?php //Display list of errors
        foreach ($inputErrors as $error) {
            echo "<p>$error</p>";
        }
        ?>
    </form>

</body>
</html>


<style>
input {
    margin-bottom: 20px;
}
form > * {
    display: block;
}
</style>

