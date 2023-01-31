<?php

require_once 'Author.php';
require_once 'Book.php';

$newAuthor = new Author('João');
$newBook = new Book('O Senhor dos Aneis', $newAuthor);
// var_dump($newBook); => verifica se o objeto esta preenchido
echo $newBook->getTitle();
