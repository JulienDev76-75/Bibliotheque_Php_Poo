<?php

require "model/bookManager.php";
require "model/entity/book.php";

$bookManager = new BookManager();
$books = $bookManager -> getBook();
var_dump($books);

// Controlleur qui gére l'affichage de tous les livres

require "view/indexView.php";

?>