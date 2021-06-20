<?php
// Controlleur qui gére l'affichage de tous les livres

require "model/bookManager.php";
require "model/entity/book.php";

$bookManager = new BookManager();
$books = $bookManager -> getBooks();


require "view/indexView.php";

?>