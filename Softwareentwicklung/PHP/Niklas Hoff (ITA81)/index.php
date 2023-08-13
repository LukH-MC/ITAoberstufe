<!--Niklas Hoff-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Niklas Hoff">
        <meta name="description" content="Formular">
        <title>Formular</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <p class="title">Formular</p>

        <form method="POST" action="html/refer.php">

            <p>Persönliche Informationen:</p>

            <p><input  type="text" placeholder="Vorname" name="name"/><input  type="text" placeholder="Nachname" name="last_name"/></p>

            <p>Mietdauer:</p>

            <p><input type="text" name="days" placeholder="Tage"><input type="text" name="weekends" placeholder="Wochenenden"><input type="text" name="kilometers" placeholder="gefahrende Kilometer"></p>

            <p>Welchen Status haben Sie?</p>

            <input type="radio" name="customer_status" value="Status 1" checked="checked"/>Status 1<br /> 
            <input type="radio" name="customer_status" value="Status 2"/>Status 2<br />
            <input type="radio" name="customer_status" value="Status 3"/>Status 3<br />

            <br />

            <input type="submit" name="submit"/><input type="reset"/> 


        </form>

        <?php

        if($_POST["submit"] == true)
        {
            $err = array();

            if($_POST["name"] == null)$err[]="Vorname nicht definiert\n";
            if($_POST["last_name"] == null)$err[]="Nachname nicht definiert\n";
            if($_POST["days"] == null)$err[]="Mietdauer in Tagen nicht definiert\n";
            if($_POST["weekends"] == null)$err[]="Anzahl der Wochenenden nicht definiert\n";
            if($_POST["kilometers"] == null)$err[]="Gefahrene Kilometer nicht definiert\n";
            if($_POST["customer_status"] == null)$err[]="Kein Status angegeben\n";
            if(ctype_digit($_POST["days"]) == false)$err[]="Tage wurden nicht in Zahlen angegeben\n";
            
            foreach ($err as $key => $value) {
                echo $err[$value];
            }
        }
        

        ?>
    </body>


