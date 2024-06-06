<?php 
// 3.
// Napraviti kalkulator koji koristi 4 osnovne
// matematicke funkcije koristenjem web formi
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Kalkulator</h2>
    <form method="POST">
        <label for="input">Unesite izraz</label><br>
        <input type="text" id="input" name="input">
        <?php
        $rezultat = '';
        if (isset($_POST['input'])) {
            $izraz = $_POST['input'];
            if (str_contains($izraz, '+')) {
                $input = explode('+', $_POST['input']);
                $rezultat = $input[0] + $input[1];
            } elseif (str_contains($izraz, '-')) {
                $input = explode('-', $_POST['input']);
                $rezultat = $input[0] - $input[1];
            } elseif (str_contains($izraz, '*')) {
                $input = explode('*', $_POST['input']);
                $rezultat = $input[0] * $input[1];
            } elseif (str_contains($izraz, '/')) {
                $input = explode('/', $_POST['input']);
                if ($input[1] == 0) {
                    $rezultat = "Nije moguće dijeliti s nulom";
                } else {
                    $rezultat = $input[0] / $input[1];
                }
            } else {
                $rezultat = "Unesite pravilan matematički izraz ('+', '-', '*', '/')";
            }
        }
        ?>
        <br><br>
        <input type="submit" value="Pošalji">
    </form>
    <h3>Rezultat izraza <?php echo $izraz ?> iznosi:</h3>
    <h3><?php echo $rezultat; ?></h3>
</body>
</html>