<?php
//1.
// Kreirajte datoteku obrazac.php i u njoj kreirajte HTML obrazac za upload datoteke. Obrazac treba poslati podatke na obradu datoteci obrada.php.
// Kreirajte datoteku obrada.php i u njoj dohvatite datoteku te učinite sljedeće:
// Provjerite je li datoteka poslana
// Kreirajte novu mapu u koju ćete pohraniti datoteku
// Provjerite je li poslana datoteka slika
// Pohranite poslanu datoteku.
?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>Upload Datoteke</title>
</head>

<body>
    <h2>Upload Datoteke</h2>
    <form action="obrada.php" method="post" enctype="multipart/form-data">
        <label for="file">Odaberite datoteku:</label>
        <input type="file" id="file" name="file" required>
        <br><br>
        <button type="submit">Pošalji</button>
    </form>
</body>

</html>