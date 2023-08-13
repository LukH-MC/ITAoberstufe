<html>
    <head>
        <title>PW VERGABE</title>
        <meta charset="utf-8" />
        <?php
            function pwCheck($pw_1, $pw_2, $name){

                $err = array();

                trim($pw_1); //Leerzeichen entfernen
                trim($pw_2);

                if ($pw_1 === $pw_2) { //Überprüfen ob $pw_1 und $pw_2 gleich sind
                    switch (strlen($pw_1)) { //Länge des PW überprüfen
                        case '>=30':
                            $err[]="Passwort ist zu lang\m";
                            break;
                        
                        case '<=6':
                            $err[]="Passwort ist zu kurz\n";
                            break;
                        case '>=6 && <=30':
                            if (stripos($pw_1, $name) === true) {
                                $err[]="Passwort darf Benutzername nicht enthalten\n";
                            }
                            if (preg_match('/[a-z]/',$pw_1) == 0) {
                                $err[]="Passwort muss mindestens einen Kleinbuchstaben enthalten\n";
                            }
                            elseif (preg_match('/[a-z]/',$pw_1) === false) {
                                $err[]="0x01\n";
                            }
                            if (preg_match('/[A-Z]/',$pw_1) == 0) {
                                $err[]="Passwort muss mindestens einen Großbuchstaben enthalten\n";
                            }
                            elseif (preg_match('/[A-Z]/',$pw_1) === false) {
                                $err[]="0x02\n";
                            }
                            if (preg_match('~[0-9]~',$pw_1) == 0) {
                                $err[]="Passwort muss mindestens eine Zahl enthalten\n";
                            }
                            elseif (preg_match('/[0-9]/',$pw_1) === false) {
                                $err[]="0x03\n";
                            }
                            if (preg_match('/[^A-Za-z0-9]/',$pw_1) == 0) {
                                $err[]="Passwort muss mindestens ein Sonderzeichen enthalten\n";
                            }
                            elseif (preg_match('/[^A-Za-z0-9]/',$pw_1) === false) {
                                $err[]="0x04\n";
                            }
                            break;
                        default:
                            $err[]="Error - Something went wrong. :(\n";
                            break;
                    }
                }
                else {
                    $err[]="Passwörter stimmen nicht überein\n";
                }

                if ($err == NULL) {
                    return true;
                }
                else {
                    return $err;
                }
            }
        ?>
    </head>
    <body>
        <form method="post">
            <table>
                <tr>   
                    <td>Benutzername:</td><td><input type="text" name="name" placeholder="Banutzername"/></td>
                </tr>
                <tr>
                    <td>Passwort:</td><td><input type="password" name="pw_1" placeholder="Passwort"/></td>
                </tr>
                <tr>
                    <td>Passwort wiederholen:</td><td><input type="password" name="pw_2" placeholder="Passwort"/></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Registrieren"/></td><td><input type="reset" name="reset" value="Zurücksetzen"/></td>
                </tr>
            </table>
        </form>
        <?php
            if (isset($POST['submit'])) {
                if(pwCheck($POST['pw_1'], $POST['pw_2'], $POST['name']) == true){
                    echo "Success\n";
                }
                else {
                    foreach (pwCheck($POST['pw_1'], $POST['pw_2'], $POST['name']) as $key => $value) {
                        echo pwCheck($POST['pw_1'], $POST['pw_2'], $POST['name'])[$value];
                    }
                }
            }
        ?>
    </body>
</html>