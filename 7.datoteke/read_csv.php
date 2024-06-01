<?php

const USERS_CSV = __DIR__ . '/podaci/users.csv';

if (($handle = fopen(USERS_CSV, 'r')) !== false) {

    $data = [];
    while (($row = fgetcsv($handle)) !== false) {
        $data[] = $row;
        echo $row[0] . ' ' . $row[1] . ' ' . $row[2] . ' ' . $row[3] . ' ' . $row[4] . '<br>';
    }

    fclose($handle);


    /* $users = file(USERS_CSV);
    foreach ($users as $user) {
        echo $user . '<br>';
    } */
} else {
    echo 'File does not exist';
}
