<?php

const FILE_PATH = __DIR__ . '/podaci/knjige.json';

$books = file_get_contents(FILE_PATH);

$books = json_decode($books, true);

$books[] = [
    'title' => 'Harry Potter',
    'author' => 'J.K. Rowling',
    'available' => true,
    'pages' => 300,
    'isbn' => '1234567890'

];


echo $books = json_encode($books, JSON_PRETTY_PRINT);

file_put_contents(FILE_PATH, $books);
