<?php

require "layout/header.php";

?>

<h2 class="mb-5 mt-5 text-center text-danger">Ajouter un livre</h2> 

<form action="addbook.php" method="post" action="">
  <div class="mb-3 mt-3 text-center">
    <select class="form-select" for="book" name="category">
      <option selected value="Jeunesse courant">Jeunesse</option>
      <option value="Histoire">Histoire</option>
      <option value="Métier">Métier</option>
      <option value="Aventure">Aventure</option>
      <option value="Fantasy">Fantasy</option>
    </select>
  </div>
    <div class="mb-3 text-center">
        <div><label>auteur :</div> 
        <input class="" type="text" name="author" value="author" /><br>
        <div><label>titre :</div> 
        <input class="" type="text" name="title" value="title" /><br>
        <div><label>éditeur :</div> 
        <input class="" type="text" name="editing" value="editing" /><br>
        <div><label>catégorie :</div> 
        <input class="" type="text" name="category" value="category" /><br>
        <div><label>pitch :</div> 
        <textarea class="" type="textarea" name="pitch" value="pitch"></textarea><br>
        <input class="btn btn-primary mt-3 mb-5" type="submit" name="valider" value="envoyer">
    </div>
</form>

<?php require "layout/footer.php"; ?>