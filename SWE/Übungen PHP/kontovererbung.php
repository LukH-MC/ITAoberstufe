<?php
class konto {
  protected $kunden_id;
  protected $kunden_nachname;
  protected $iban;
  protected $saldo;

  function __construct($kunden_id, $kunden_nachname, $iban) {
    $this->kunden_id = $kunden_id;
    $this->kunden_nachname = $kunden_nachname;
    $this->iban = $iban;
    $this->saldo = 0;
  }
  function konto_daten_anzeigen() {
    echo "Kunden ID: " . $this->kunden_id . "<br>";
    echo "Nachname: " . $this->kunden_nachname . "<br>";
    echo "IBAN: " . $this->iban . "<br>";
    echo "Saldo: " . $this->saldo . "<br>";
  }
  function saldo_anzeigen() {
    return $this->saldo;
  }
  function einzahlen($wert) {
    $this->saldo += $wert;
  }
  function auszahlen($wert) {
    $this->saldo -= $wert;
  }
  function __destruct() {
    echo "<br>Zerstörung erfolgreich";
  }
}

class girokonto extends konto {
  protected $zinssatz_guthaben = 0;

  function __construct($kunden_id, $kunden_nachname, $iban) {
    parent::__construct($kunden_id, $kunden_nachname, $iban);
  }
  function konto_daten_anzeigen() {
    parent::konto_daten_anzeigen();
    echo "Kontoart: Girokonto<br>";
    echo "Zinssatz: " . $this->zinssatz_guthaben . "<br>";
  }
  function __destruct() {
    parent::__destruct();
  }
}

class sparkonto extends konto {
  protected $zinssatz_guthaben = 0.04;

  function __construct($kunden_id, $kunden_nachname, $iban) {
    parent::__construct($kunden_id, $kunden_nachname, $iban);
  }
  function konto_daten_anzeigen() {
    parent::konto_daten_anzeigen();
    echo "Kontoart: Sparkonto<br>";
    echo "Zinssatz: " . $this->zinssatz_guthaben . "<br>";
  }
  function __destruct() {
    parent::__destruct();
  }
}

class festgeldkonto extends konto {
  protected $zinssatz_guthaben = 2.5;

  function __construct($kunden_id, $kunden_nachname, $iban) {
    parent::__construct($kunden_id, $kunden_nachname, $iban);
  }
  function konto_daten_anzeigen() {
    parent::konto_daten_anzeigen();
    echo "Kontoart: Festgeldkonto<br>";
    echo "Zinssatz: " . $this->zinssatz_guthaben . "<br>";
  }
  function __destruct() {
    parent::__destruct();
  }
}
?>

<form method=POST>
  <table>
    <tr><td>Kunden ID:</td><td><input type='number' name='id' min='1' required></td></tr>
    <tr><td>Nachname:</td><td><input type='text' name='nachname' required></td></tr>
    <tr><td>IBAN:</td><td><input type='text' name='iban' pattern='DE \d{2} \d{4} \d{4} \d{4}' placeholder='DE 00 0000 0000 0000' required></td></tr>
    <tr><td>Kontoart:</td><td><input type='radio' name='kontoart' value='0' checked> Girokonto<br><input type='radio' name='kontoart' value='0.04'> Sparkonto<br><input type='radio' name='kontoart' value='2.5'> Festgeldkonto</td></tr>
  </table>
  <input type='submit' value='Erstellen' name='erstellen'>
</form>

<?php
if (isset($_POST['erstellen'])) {
  switch ($_POST['kontoart']) {
    case 0:
      $gkonto = new girokonto($_POST['id'], $_POST['nachname'], $_POST['iban']);
      $gkonto->konto_daten_anzeigen();
      break;
    case 0.04:
      $skonto = new sparkonto($_POST['id'], $_POST['nachname'], $_POST['iban']);
      $skonto->konto_daten_anzeigen();
      break;
    case 2.5:
      $fgkonto = new festgeldkonto($_POST['id'], $_POST['nachname'], $_POST['iban']);
      $fgkonto->konto_daten_anzeigen();
      break;
  }
}
