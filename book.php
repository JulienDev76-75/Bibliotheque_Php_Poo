<?php
// Controleur qui gère l'affichage du détail d'un livre

require "model/bookManager.php";
require "model/entity/book.php";

$bookManager = new BookManager();
$book = $bookManager -> getBook();
var_dump($book);

if(isset($_GET["id"]) && !empty($_GET["id"])) {
$deleteManager = new BookManager();
$result = $deleteManager -> deleteBook($_GET["id"]);
}
var_dump($result);

require "view/bookView.php";

?>
