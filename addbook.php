<!-- A METTRE DANS LE CONTROLER -->
<?php
 require "model/bookManager.php";
 require "model/entity/book.php";
 $bookmanager = new BookManager();
 
   if(!empty($_POST) && isset($_POST["valider"])) {
     if(empty($_POST["author"])) {
       $author = htmlspecialchars($_POST["author"]);
       echo "<p> Veuillez rentrer un auteur</p>";
     }
     if(empty($_POST["title"])) {
       $title = htmlspecialchars($_POST["title"]);
       echo "<p> Veuillez rentrer un titre</p>";
     }
     if(empty($_POST["editing"]) && is_numeric($_POST["editing"])) {
       $editing = htmlspecialchars($_POST["editing"]);
       echo "<p> Veuillez rentrer un résumé</p>";
     }
     if(empty($_POST["category"])) {
       $category = htmlspecialchars($_POST["category"]);
       echo "<p> Veuillez rentrer une catégory</p>";
     }
     if(empty($_POST["pitch"])) {
       $pitch = htmlspecialchars($_POST["pitch"]);
       echo "<p>Veuillez rentrer un résumé</p>";
     }
     else {
     $book = new Book($_POST);
     //J'ajoute l'objet BOOK en base de données avec la méthode addBook() définie dans bookManager
     $result = $bookmanager->addBook($book);
     //message de succès pour dire que le livvre a bien été ajouté
     $success = "votre livre a bien été ajouté";
     }
   }

   require "view/addbookView.php";

   ?>

