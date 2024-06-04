<?php
$podaci = $_POST;

if (empty($podaci) || $podaci['first_name'] === "" && $podaci['last_name'] === "") {
    echo 'Nema podataka za obradu!';
} else {
    if ($podaci['first_name'] !== "") {
        $ime = $podaci['first_name'];
        echo 'Ime: ' . $ime . '<br>';
    } else {
        echo 'Ime: ' . 'Nema podatka' . '<br>';
    }
    if ($podaci['last_name'] !== "") {
        $prezime = $podaci['last_name'];
        echo 'Prezime: ' . $prezime . '<br>';
    } else {
        echo 'Prezime: ' . "Nema podatka" . '<br>';
    }
}
    