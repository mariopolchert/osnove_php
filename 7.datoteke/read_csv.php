<?php

const USERS_CSV = __DIR__ . '/podaci/users.csv';

if (false !== ($handle = fopen(USERS_CSV, 'r'))) {
    $headers = fgetcsv($handle);
    $data = [];

    while (false !== ($row = fgetcsv($handle))) {
        $data[] = array_combine($headers, $row);

        /*  echo $row[0] . ' ' . $row[1] . ' ' . $row[2] . ' ' . $row[3] . ' ' . $row[4] . '<br>'; */
    }
    fclose($handle);
    var_dump($data);


    /* $users = file(USERS_CSV);
    foreach ($users as $user) {
        echo $user . '<br>';
    } */
} else {
    echo 'File does not exist';
}
