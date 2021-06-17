<!-- A METTRE DANS LA VIEW -->
<?php
 include "layout/header.php";
 require "model/bookManager.php";
 require "model/entity/book.php";
 ?> 

<h2 class="mb-5">Ajouter un livre</h2> 

<form action="addbook.php" method="post">
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
        <label>auteur : <input type="text"></label><br>
        <label>titre : <input type="text"></label><br>
        <label>éditeur : <input type="text"></label><br>
        <label>catégorie : <input type="text"></label><br>
        <label>pitch : <input type="text"></label><br>
        <input type="submit" value="Envoyer">
    </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>


  <!-- A METTRE DANS LE CONTROLER -->
<?php
  if(!empty($_POST)) {
    //J'instancie l'objet BOOK avec les données du formulaire addbook que je stock dans $addbook
    $addbook = new Book($_POST);
    //J'ajoute l'objet BOOK en base de données avec la méthode addBook()
    $book->addBook();
    //message de succès pour dire que le livvre a bien été ajouté
    $success = "votre livre a bien été ajouté";
  }
?> 

<?php include "layout/footer.php"; ?>