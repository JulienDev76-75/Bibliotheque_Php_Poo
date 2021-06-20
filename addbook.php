<!-- A METTRE DANS LE CONTROLER -->
<?php
 include "layout/header.php";
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
     var_dump($book);
     }
   }
 ?> 

<!-- A METTRE DANS LA VIEW --> 

<h2 class="mb-5 text-center text-danger">Ajouter un livre</h2> 

<form action="addbook.php" method="post" action="">
  <div class="mb-3">
    <select class="form-select" for="book" name="category">
      <option selected value="Jeunesse courant">Jeunesse</option>
      <option value="Histoire">Histoire</option>
      <option value="Métier">Métier</option>
      <option value="Aventure">Aventure</option>
      <option value="Fantasy">Fantasy</option>
    </select>
  </div>
    <div class="mb-3">
        <div><label>auteur :</div> 
        <input type="text" name="author" value="author" /><br>
        <div><label>titre :</div> 
        <input type="text" name="title" value="title" /><br>
        <div><label>éditeur :</div> 
        <input type="text" name="editing" value="editing" /><br>
        <div><label>catégorie :</div> 
        <input type="text" name="category" value="category" /><br>
        <div><label>pitch :</div> 
        <input type="text" name="pitch" value="pitch" /><br>
        <input type="submit" name="valider" value="envoyer">
    </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php include "layout/footer.php"; ?>