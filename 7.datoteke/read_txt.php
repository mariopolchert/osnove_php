<?php

const FILE_PATH = __DIR__ . '/podaci/polaznici.txt';


try {

    if (!file_exists(FILE_PATH)) {
        throw new Exception('File does not exist: ' . FILE_PATH);
    }

    $pointer = fopen(FILE_PATH, 'r');
    if ($pointer === false) {
        throw new Exception('Unable to open the file: ' . FILE_PATH);
    }

    if (false !== $pointer = fopen(FILE_PATH, 'r')) {
        while (false !== $line = fgets($pointer)) {
            echo $line . '<br>';
        }
        fclose($pointer);
    } else {
        echo 'Unable to open the file: ' . FILE_PATH . '<br>';
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
