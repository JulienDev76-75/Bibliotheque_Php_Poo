<?php

require "layout/header.php";

?>

<h2 class="mb-5 mt-5 text-center text-danger">Ajouter un Utilisateur</h2> 

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom</label>
    <input type="text" name="firstname" value="prénom" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="lastname" value="nom" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse</label>
    <input type="text" name="adress" value="adresse" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ville</label>
    <input type="text" name="city" value="ville" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Code Postal</label>
    <input type="text" name="postal_code" value="code postal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" name="age" value="âge" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse E-mail</label>
    <input type="email" name="mail" value="e-mail" class="form-control" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Assurez-vous de bien rentrer un email valide</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Numéro de téléphone</label>
    <input type="text" name="phone" value="téléphone" class="form-control" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Assurez-vous de rentrer un numéro à 10 chiffres</small>
  </div>

  <button type="submit" name="valider" class="btn btn-danger mb-5">valider</button>
</form>

<?php require "layout/footer.php"; ?>