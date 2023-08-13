<!--Niklas Hoff-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Niklas Hoff">
        <meta name="description" content="Abrechnung">
        <title>Abrechnug</title>
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>

    <body>

        <p class="title">Formular</p>

        <?php

            echo "<br />";
            echo "erstellt am: " . date("d.m.Y") . "<br /><br />";
            echo "<h3> Kunde: " . ucfirst($_POST["name"]) . " " . ucfirst($_POST["last_name"]) . "</h3><br /><br />";

            echo "Anzahl der Tage: " . $_POST["days"] . "<br />";
            echo "darin enthaltene Wochenenden: " . $_POST["weekends"] . "<br />";
            echo "gefahrene Kilometer: " . $_POST["kilometers"] . "km<br />";
            echo "Ihr Kundenstatus: " . $_POST["customer_status"] . "<br /><br /><br />";

            
            $new_kilometers = $_POST["kilometers"] - ($_POST["weekends"] * 100);
            $cost_kilometers = $new_kilometers * 0.5;
            $cost_days = $_POST["days"] * 18;
            $cost = $cost_days + $cost_kilometers;

            switch($_POST["customer_status"]){
                case "Status 1":
                    $new_cost = $cost - ($cost * 0.02);
                    break;

                case "Status 2":
                    $new_cost = $cost - ($cost * 0.03);
                    break;

                case "Status 3":
                    $new_cost = $cost - ($cost * 0.04);
                    break;
            }
            echo "<h3>zu zahlender Betrag: " . $new_cost . "€</h3>";
        ?>
    </body>


