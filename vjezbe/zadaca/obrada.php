<?php
// Provjerite je li datoteka poslana
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Kreirajte novu mapu u koju ćete pohraniti datoteku
    $uploadFileDir = './uploaded_files/';
    if (!is_dir($uploadFileDir)) {
        mkdir($uploadFileDir);
    }

    // Kreirajte putanju
    $dest_path = $uploadFileDir . $fileName;
    // Pohranite datoteku
    move_uploaded_file($fileTmpPath, $dest_path)  ?? die('Došlo je do pogreške prilikom prijenosa datoteke.');
    // Provjerite je li poslana datoteka slika
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg', 'webp');
    if (in_array($fileExtension, $allowedfileExtensions)) {
        echo "Datoteka je uspješno prenesena." . "<br>" . "Datoteka je slika!";
    } else {
        echo "Datoteka je uspješno prenesena." . "<br>" . " Datoteka nije slika!";
    }
} else {
    echo "Nema datoteke ili je došlo do pogreške prilikom prijenosa.";
}
