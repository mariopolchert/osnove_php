<?php

const FILE_PATH = __DIR__ . '/podaci/polaznici.txt';



$handle = fopen(FILE_PATH, 'a');
//$handle = fopen(FILE_PATH, w');

if (false !== $handle) {
    fwrite($handle, 'Pero Perić' . "\n");
    fwrite($handle, 'Ivo Ivić' .  "\n");
    fwrite($handle, 'Ana Anić' .  "\n");
    fclose($handle);
} else {
    echo 'File does not exist';
}
