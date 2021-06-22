<?php
// Controleur qui gère l'affichage du détail d'un livre

require "model/bookManager.php";
require "model/entity/book.php";
require "model/entity/customer.php";

$bookManager = new BookManager();
$book = $bookManager->getBook();

//si l'id est bien présent dans l'url donc que c'est bien le bon livre, alors on peut le supprimer
if(isset($_GET["id"]) && !empty($_GET["id"]) && isset($_POST["valider"])) {
$bookManager -> deleteBook($_GET["id"]);
echo "<p>le livre a bien été supprimé</p>";
//une fois supprimé, on reste retourne sur la page de la liste des livres pour voir sa suppression
header("Location:index.php");
exit();
}

if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $book = $bookManager->getBook($_GET["id"]);
}


require "view/bookView.php";

?>
