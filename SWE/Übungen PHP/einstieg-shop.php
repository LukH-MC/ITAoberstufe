<?php declare(strict_types=1);
session_start();

//counter
const COUNTERFILE = __DIR__ . "/einstieg-counter.json";
$counterData = json_decode(file_get_contents(COUNTERFILE), associative: true);

$thisMonth = (int) date("n");
if ($counterData["month"] != $thisMonth) {
    $counterData["visitCount"] = 0;
    $counterData["month"] = $thisMonth;
}

$counterData["visitCount"] ++;
file_put_contents(COUNTERFILE, json_encode($counterData, flags: JSON_PRETTY_PRINT));

if (!isset($_SESSION["username"])) {
    header("Location: einstieg.php");
}

?>



<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Einstiegsaufgabe</title>
</head>
<body>
    <h3>Hallo, <?= $_SESSION["username"]?></h3>
    <h4>Viel Spaß in unserem WEBSHOP</h4>
    <form method="post">
        <input type="checkbox" name="1"><label for="1">Crewmate Rot</label><br>
        <input type="checkbox" name="2"><label for="2">Crewmate Blau</label><br>
        <input type="checkbox" name="3"><label for="3">Crewmate Türkis</label><br>
        <input type="checkbox" name="4"><label for="4">Crewmate Orange</label><br>

    </form>
</body>
</html>


<style>
</style>

