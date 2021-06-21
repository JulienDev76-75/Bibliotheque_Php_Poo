<!-- A METTRE DANS LE CONTROLER -->
<?php
 include "layout/header.php";
 require "model/bookManager.php";
 require "model/entity/book.php";

 $customerManager = new CustomerManager();
   if(!empty($_POST) && isset($_POST["valider"])) {
     if(empty($_POST["prénom"])) {
       $author = htmlspecialchars($_POST["prénom"]);
       echo "<p> Veuillez rentrer un prénom</p>";
     }
     if(empty($_POST["nom"])) {
       $title = htmlspecialchars($_POST["nom"]);
       echo "<p> Veuillez rentrer un nom</p>";
     }
     if(empty($_POST["adress"])) {
       $editing = htmlspecialchars($_POST["adress"]);
       echo "<p> Veuillez rentrer une adresse</p>";
     }
     if(empty($_POST["city"])) {
       $category = htmlspecialchars($_POST["city"]);
       echo "<p> Veuillez rentrer une ville</p>";
     }
     if(empty($_POST["postal_code"])) {
       $pitch = htmlspecialchars($_POST["postal_code"]);
       echo "<p>Veuillez rentrer un code postal</p>";
     }
     if(empty($_POST["mail"]) && filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        $pitch = htmlspecialchars($_POST["mail"]);
        echo "<p>Veuillez rentrer un mail valide</p>";
      }
     if(empty($_POST["phone"]) && is_numeric($_POST["phone"]) && ctype_digit($_POST["phone"])) {
        $pitch = htmlspecialchars($_POST["phone"]);
        echo "<p>Veuillez rentrer dix chiffres</p>";
      }
     else {
     $customer = new Customer($_POST);
     //J'ajoute l'objet BOOK en base de données avec la méthode addBook() définie dans bookManager
     $result = $customerManager->addCustomer($book);
     //message de succès pour dire que le livvre a bien été ajouté
     $success = "votre utilisateur a bien été ajouté";
     var_dump($book);
     }
   }
 ?> 

<!-- A METTRE DANS LA VIEW --> 

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
        <input class="" type="text" name="pitch" value="pitch" /><br>
        <input class="btn btn-primary mt-3 mb-5" type="submit" name="valider" value="envoyer">
    </div>
</form>

<?php include "layout/footer.php"; ?>