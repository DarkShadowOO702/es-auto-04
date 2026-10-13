
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documenti</title>
</head>

<body>

<h2>Inserimento Auto</h2>

<font face="Verdana">

<?php

$marca = $_POST["marca"];
$modello = $_POST["modello"];
$stato = $_POST["stato"];
$anno = $_POST["anno"];
$cilindrata = $_POST["cilindrata"];
$cavalli = $_POST["cavalli"];
$prezzo = $_POST["prezzo"];
$targa = $_POST["targa"];
$descrizione = $_POST["descrizione"];

if (isset($_POST["accessori"])) {
    $accessori = implode(", ", $_POST["accessori"]);
} else {
    $accessori = "Nessuno";
}

?>

<table border="1">

    <tr>
        <td bgcolor="LightBlue">Marca</td>
        <td>
            <?php echo $marca; ?>
        </td>
    </tr>

    <tr>
        <td bgcolor="LightBlue">Modello</td>
        <td>
            <?php echo $modello; ?>
        </td>
    </tr>

    <tr>
        <td bgcolor="LightBlue">Stato</td>
        <td>
            <?php echo $stato; ?>
        </td>
    </tr>

    <tr>
        <td bgcolor="LightBlue">Anno Costruzione</td>
        <td>
            <?php echo $anno; ?>
        </td>
    </tr>

    <tr>
        <td bgcolor="LightBlue">Cilindrata</td>
        <td>
            <?php echo $cilindrata; ?>
        </td>
    </tr>

    <tr>
        <td bgcolor="LightBlue">Cavalli</td>
        <td>
            <?php echo $cavalli; ?>
        </td>
    </tr>

    <tr>
        <td bgcolor="LightBlue">Prezzo</td>
        <td>
            <?php echo $prezzo . " Euro"; ?>
        </td>
    </tr>

    <tr>
        <td bgcolor="LightBlue">Targa</td>
        <td>
            <?php echo $targa; ?>
        </td>
    </tr>

    <tr>
        <td bgcolor="LightBlue">Accessori</td>
        <td>
            <?php echo $accessori; ?>
        </td>
    </tr>

    <tr>
        <td bgcolor="LightBlue">Descrizione Aggiuntiva</td>
        <td>
            <?php echo $descrizione; ?>
        </td>
    </tr>

</table>

<?php

$file = fopen("F_AUTO.DAT", "a");

fwrite($file, $marca . "|" .
              $modello . "|" .
              $stato . "|" .
              $anno . "|" .
              $cilindrata . "|" .
              $cavalli . "|" .
              $prezzo . "|" .
              $targa . "|" .
              $accessori . "|" .
              $descrizione . "\n");

fclose($file);

?>

</font>

</body>
</html>