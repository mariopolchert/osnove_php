<?php
// 2.
// Dovrsiti zadatak tecajnica.php
// napravit web formu za konverziju EUR u USD
// korisink u formu upisuje iznos u eurima i nakon submita
// vi ispisujete konvertiranu vrijdnost

const URL = 'https://www.hnb.hr/tecajn-eur/htecajn.htm';

$lista = file(URL);

array_shift($lista);

$valutniRedak = '';
foreach ($lista as $redak) {
    if (str_contains($redak, 'USD')) {
        $valutniRedak = $redak;
        break;
    }
}

$usdValues = explode('       ', $valutniRedak);
$usdSrednjiTecaj = $usdValues[2];

// Izračun
$usdSrednjiTecaj = str_replace(',', '.', $usdSrednjiTecaj);

$dolari = '';
if (isset($_POST['euri'])) {
    $euri = $_POST['euri'];
    $euri = str_replace(',', '.', $euri);
    if (is_numeric($euri) && $euri > 0) {
        $dolari = number_format($euri * $usdSrednjiTecaj, 2) . ' $';
    } else {
        $dolari = 'Molim unesite pravilan iznos u €!';
    }
}
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>Konverter iz eura u dolare</title>
</head>

<body>
    <h1>Konverter iz eura u dolare</h1>
    <form method="POST">
        <label for="euri">Unesite iznos u €:</label>
        <input type="text" id="euri" name="euri" required placeholder="€">
        <button type="submit">Preračunajte</button>
    </form>

    <?php if ($dolari !== '') : ?>
        <h4><?= number_format($euri, 2) ?> €</h4>
        <h2>Iznosi:</h2>
        <h4><?php echo $dolari; ?></h4>
    <?php endif; ?>
</body>

</html>