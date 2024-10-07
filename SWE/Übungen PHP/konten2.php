<?php
$konten = [];

class Konto {
    private int $kunden_id;
    private string $kunden_nachname;
    private int $kontotyp = 0;
    private string $iban;
    private int $saldo = 0;
    private int $zinssatz_guthaben = 0;

    /**
     * @param int $kunden_id
     * @param string $kunden_nachname
     * @param int $kontotyp
     * @param string $iban
     */
    public function __construct(int $kunden_id, string $kunden_nachname, int $kontotyp, string $iban)
    {
        $this->kunden_id = $kunden_id;
        $this->kunden_nachname = $kunden_nachname;
        $this->kontotyp = $kontotyp;
        $this->iban = $iban;
    }

    public function konto_daten_anzeigen():void
    {
        $kontobezeichnungen = ["Girokonto", "Sparkonto", "Festgeldkonto"];

        echo "Kunden Id: <strong>" . $this->kunden_id . "</strong><br>" .
            "└Nachname: <strong>" . $this->kunden_nachname . "</strong><br>" .
            "└Kontotyp: <strong>" . $kontobezeichnungen[$this->kontotyp] . "</strong><br>" .
            "└Iban: <strong>" . $this->iban . "</strong><br>" .
            "└Saldo: <strong>" . $this->saldo . " €</strong><br>" .
            "└Zinssatz Guthaben: <strong>" . $this->zinssatz_guthaben . " €</strong><br>";
    }

    public function einzahlen(int $wert):void
    {
        $this->saldo += $wert;
    }
    public function auszahlen(int $wert):void
    {
        $this->saldo -= $wert;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "help";
    }

    public function getArray():array {
        return [
            'kunden_id' => $this->kunden_id,
            'kunden_nachname' => $this->kunden_nachname,
            'kontotyp' => $this->kontotyp,
            'iban' => $this->iban,
            'saldo' => $this->saldo,
            'zinssatz_guthaben' => $this->zinssatz_guthaben
        ];
    }
}

function konto_speichern(Konto $konto):void {
    $json = json_encode($konto->getArray(), JSON_PRETTY_PRINT);
    var_dump($konto);
    var_dump($json);
    file_put_contents("konten.json", $json);
}

function konten_laden(): array
{
    $json = file_get_contents("konten.json");
    return json_decode($json, associative: true);
}

?>


<html lang="de">
<head>
    <title>Kapitalverzinsung</title>
    <meta http-equiv="content-type" content="text/plain; charset=utf-8" />
    <meta http-equiv="content-language" content="de" />
</head>

<body>
<h1>Konten </h1>
<form action ="#" method="GET">
    <table>
        <tr>
            <td><label for="kunden_id">Kundennummer</label></td>
            <td><input type="number" name="kunden_id" id="kunden_id" placeholder="943858" required></td>
        </tr>
        <tr>
            <td><label for="kunden_nachname">Nachname</label></td>
            <td><input type="text" name="kunden_nachname" id="kunden_nachname" placeholder="Müller" required></td>
        </tr>
        <tr>
            <td><label for="">Kontoart</label></td>
            <td>
                <input type="radio" name="kontotyp" id="giro" value ="0" required>
                <label for="giro">Girokonto</label> <br>
                <input type="radio" name="kontotyp" id="spar" value ="1" required>
                <label for="spar">Sparkonto</label> <br>
                <input type="radio" name="kontotyp" id="fest" value ="2" required>
                <label for="fest">Festgeltkonto</label> <br>
            </td>
        </tr>
        <tr>
            <td><label for="iban">IBAN</label></td>
            <td><input type="text" name="iban" id="iban" pattern="[A-Za-z]{2}\d{2}\s\d{4}\s\d{4 }\s\d{4}" placeholder="DE12 1234 1234 1234" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Konto anlegen"></td>
        </tr>
    </table>
</form>

<?php
if (!empty($_GET)) {
    $konto = new Konto(
        (int) $_GET["kunden_id"],
        (string) $_GET["kunden_nachname"],
        (int) $_GET["kontotyp"],
        strtoupper($_GET["iban"])
    );
    konto_speichern($konto);
    $konten = konten_laden();

    echo "<h3>Konten: </h3>";
    echo "<ul>";
    foreach ($konten as $konto) {
        echo "<li>";
        $konto->konto_daten_anzeigen();
        echo "</li>";
    }
    echo "</ul>";
}
?>

<script>
    function f() {
        setTimeout(() => {
                //document.body.append(Math.random() + " ")
                scrollTo(0,scrollY+10);
                f();
            }, 1
        );
    }
    //  f();
</script>

</body>
</html>

<style>
    input {
        margin: 5px auto;
    }
</style>

