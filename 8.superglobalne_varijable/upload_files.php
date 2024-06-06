<?php

function prettyPrint(array $print): void
{
    echo "<pre>";
    print_r($print);
    echo "</pre>";
};

prettyPrint($_FILES);

$uploadDir = __DIR__ . '/uploads';

if (!empty($_FILES)) {
    if (is_dir($uploadDir) === false) {
        mkdir($uploadDir);
    }
};

$file = $_FILES['datoteka']['name'];
$fileName = $uploadDir . '/' . $file;

if (move_uploaded_file($_FILES['datoteka']['tmp_name'], $fileName)) {
    echo 'Datoteka je uspješno prenesena!';
    echo "<a href='$fileName'>Prikaži datoteku</a>";
} else {
    echo 'Došlo je do greške prilikom prijenosa datoteke!';
};


?>

<!DOCTYPE html>
<html>

<body>

    <h2>File upload</h2>

    <form method="POST" enctype="multipart/form-data">
        <label for="datoteka">Datoteka:</label><br>
        <br>
        <input type="file" id="datoteka" name="datoteka"><br>
        <br>
        <input type="submit" value="Pošalji">
    </form>


</body>

</html>