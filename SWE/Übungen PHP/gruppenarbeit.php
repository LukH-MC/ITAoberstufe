<?php

$groups = [];
$students = [];
$groupSize = 0;

if (!empty($_GET)) {
    $groupSize = $_GET["groupSize"];

    //array mit schülern füllen
    for ($i = 0; $i < $_GET["studentCount"]; $i++) {
        $students[] = $i+1;
    }

    //gruppen befüllen
    $y = 0;
    $group = [];
    foreach ($students as $student) {
        //wenn gruppe voll, zu gesamtliste hinzufügen und neue beginnen
        if (count($group) >= $groupSize) {
            $groups[] = $group;
            $group = [];
        }
        $group[] = $student; //schüler zu gruppe hinzufügen
    }
    //überreste hinzufügen
    $groups[] = $group;
}

function printGroups(): void
{
    global $groups;

    //gruppen als einzelne divs ausgeben
    foreach ($groups as $group) {
        echo "<div class='group'><ul>";
        foreach ($group as $student)  {
            echo "<li>Schüler $student</li>";
        }
        echo "</ul></div>";
    }
}

?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gruppenrechner</title>
</head>
<body>
<main>
    <form action="" method="GET">
        <label for="studentCount">Anzahl Schüler</label> <br>
        <input type="number" name="studentCount" id="studentCount" required>
        <br><br>
        <label for="groupSize">Gruppengröße</label> <br>
        <input type="number" name="groupSize" id="groupSize" required>
        <br><br>
        <button type="submit">Berechnen</button>
    </form>
    <div>
        <?php printGroups()?>
    </div>
</main>

</body>
</html>

<style>
* {
    font-size: 16px;
    font-family: Arial;
}

main {
    display: flex;
}

form {
    margin-right: 50px;
}

.group {
    display: inline-block;
    background-color: whitesmoke;
    border: 2px solid lightgray;
    margin: 10px;
    padding-right: 24px;
    border-radius: 10px;
}
</style>
