<?php
class konto {
  private $kunden_id;
  private $kunden_nachname;
  private $konto_art;
  private $iban;
  private $saldo;
  private $zinssatz_guthaben;

  function __construct($kunden_id, $kunden_nachname, $iban, $zinssatz_guthaben) {
    $this->kunden_id = $kunden_id;
    $this->kunden_nachname = $kunden_nachname;
    $this->iban = $iban;
    $this->zinssatz_guthaben = $zinssatz_guthaben;
    $this->saldo = 0;
    switch ($zinssatz_guthaben) {
      case 0:
        $this->konto_art = "Girokonto";
        break;
      case 0.04:
        $this->konto_art = "Sparkonto";
        break;
      case 2.5:
        $this->konto_art = "Festgeldkonto";
        break;
    }
  }
  function konto_daten_anzeigen() {
    echo "Kunden ID: " . $this->kunden_id . "<br>";
    echo "Nachname: " . $this->kunden_nachname . "<br>";
    echo "Kontoart: " . $this->konto_art . "<br>";
    echo "IBAN: " . $this->iban . "<br>";
    echo "Saldo: " . $this->saldo . "<br>";
    echo "Zinssatz: " . $this->zinssatz_guthaben . "<br>";
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
    echo "Zerstörung erfolgreich";
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
  $konto1 = new konto($_POST['id'], $_POST['nachname'], $_POST['iban'], $_POST['kontoart']);
  $konto1->konto_daten_anzeigen();
}
