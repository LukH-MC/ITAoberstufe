<html>
<head>
  <title>Kapitalverzinsung</title>
  <meta http-equiv="content-type" content="text/plain; charset=utf-8"/>
  <meta http-equiv="content-language" content="de"/>
  <link type="text/css" rel="stylesheet" href="style.css"/>
</head>

<?php
if ($_POST['berechnen']) {
  $nachn = $_POST['nachname'];
  $iban = array($_POST['iban0'], $_POST['iban1'], $_POST['iban2'], $_POST['iban3'], $_POST['iban4']);
  $kap = $_POST['kapital'];
  $laufz = $_POST['laufzeit'];
  $zinss = $_POST['zinssatz'];
  $check = 0;
  $i = 0;
  $eg = 0;

  $ib = str_split($iban[2].$iban[3].$iban[4]);
  foreach ($ib as $num) {
    $i++;
    if ($i % 2 != 0) {
      $num *= 3;
    }
    $eg += $num;
  }
  $check = $eg % 13;

  $fehler_nachricht = [];
  
  if ($kap == "") $fehler_nachricht[] = "Anfangskapital fehlt";
  elseif ($kap < 5000) {
    $fehler_nachricht[] = "Kapital muss mindestens 5.000€ betragen";
    $kap = null;
  }
  elseif ($kap > 25000) {
    $fehler_nachricht[] = "Kapital darf maximal 25.000€ betragen";
    $kap = null;
  }
  if ($iban == "") $fehler_nachricht[] = "IBAN fehlt";
  if ($iban[1] != $check) $fehler_nachricht[] = "IBAN Prüfziffer stimmt nicht";
  if ($zinss == "") $fehler_nachricht[] = "Zinssatz fehlt";
}   
?>

<body>
  <h1>Kapitalverzinsung</h1>
  <form method=POST>
    <?php
    echo "<h2><br>Nachname</h2>";
    echo "<input type='text' name='nachname' value=" . $nachn . ">";
    echo "<h2><br>IBAN</h2>";
    echo "<input type='text' name='iban0' maxlength='2' minlength='2' placeholder='DE' size='2em' value=" . $iban[0] . "> - ";
    echo "<input type='text' name='iban1' maxlength='2' minlength='2' size='2' placeholder='00' value=" . $iban[1] . "> - ";
    echo "<input type='text' name='iban2' maxlength='4' minlength='4' size='4' placeholder='0000' value=" . $iban[2] . "> - ";
    echo "<input type='text' name='iban3' maxlength='4' minlength='4' size='4' placeholder='0000' value=" . $iban[3] . "> - ";
    echo "<input type='text' name='iban4' maxlength='4' minlength='4' size='4' placeholder='0000' value=" . $iban[4] . ">";
    echo "<h2><br>Höhe Kapital</h2>";
    echo "<input type='number' name='kapital' value=" . $kap . ">";
    echo "<h2><br>Laufzeit in Jahren</h2>";
    echo "<select name=laufzeit>";
    for ($laufzeit = 1; $laufzeit <= 30; $laufzeit++) {
      if ($laufzeit == $laufz) echo "<option value=". $laufzeit . " selected>" . $laufzeit . "</option>";
      else echo "<option value=". $laufzeit . ">" . $laufzeit . "</option>";
    }
    echo "</select>";
    echo "<h2><br>Zinssatz</h2>";
    ?>
    <h3>
      <input type="radio" name="zinssatz" value="0.015" checked> 1.5%
      <input type="radio" name="zinssatz" value="0.02"> 2.0%
      <input type="radio" name="zinssatz" value="0.025"> 2.5%
    </h3>
    <input type="submit" value="berechnen" name="berechnen"/>
  </form>

  <?php
    if ($_POST['berechnen']) {
      echo "<h2>Sie haben folgendes eingegeben:</h2><ul>";
      echo "<li>Nachname: " . $_POST['nachname'] . "</li>";
      echo "<li>IBAN: " . $_POST['iban'] . "</li>";
      echo "<li>Höhe Kapital: " . $_POST['kapital'] . "</li>";
      echo "<li>Laufzeit: " . $_POST['laufzeit'] . "</li>";
      echo "<li>Zinssatz: " . $_POST['zinssatz'] * 100 . "%</li></ul>";
      if ($fehler_nachricht) {
        echo "<h3>Es sind Fehler aufgetreten:</h3><ul>";
        foreach ($fehler_nachricht as $fehler) echo "<li>" . $fehler . "</li>";
        echo "</ul>";
      }
      else {
        echo "<h2>Sie erhalten diese Zinsen: </h2>";
        $kapneu = $kap;
        for ($i = 1; $i <= $laufz; $i++) {
          $zinsen = $kapneu * $zinss;
          $kapneu += $zinsen;
          echo "<h3>Jahr " . $i . ": " . number_format($zinsen, 2, ',', '.') . "€</h3>";
          if ($i % 5 == 0) {
            $kapneu *= 1.01;
            echo "Sie erhalten eine Prämie von 1% für 5 abgeschlossene Jahre.";
          }
        }
        echo "<h2>Neues Kapital: " . $kapneu . "</h2>";
      }
    }
  ?>
</body>
</html>
