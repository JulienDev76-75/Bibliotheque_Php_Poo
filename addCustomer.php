<!-- A METTRE DANS LE CONTROLER -->
<?php
 require "model/customerManager.php";
 require "model/entity/customer.php";
 $customerManager = new CustomerManager();
 
   if(!empty($_POST) && isset($_POST["valider"])) {
     if(empty($_POST["firstname"])) {
       $author = htmlspecialchars($_POST["firstname"]);
       echo "<p> Veuillez rentrer un prénom</p>";
     }
     if(empty($_POST["lastname"])) {
       $title = htmlspecialchars($_POST["lastname"]);
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
     if(empty($_POST["age"]) && is_numeric($_POST["age"])) {
      $pitch = htmlspecialchars($_POST["age"]);
      echo "<p>Veuillez rentrer un age</p>";
     }
     if(empty($_POST["mail"]) && filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        $pitch = htmlspecialchars($_POST["mail"]);
        echo "<p>Veuillez rentrer un mail valide</p>";
      }
     if(empty($_POST["phone"])) {
        $pitch = htmlspecialchars($_POST["phone"]);
        echo "<p>Veuillez rentrer dix chiffres</p>";
      }

     else {
     $customer = new Customer($_POST);
     //J'ajoute l'objet BOOK en base de données avec la méthode addBook() définie dans bookManager
     $result = $customerManager->addCustomer($customer);
     //message de succès pour dire que le livvre a bien été ajouté
     $success = "votre utilisateur a bien été ajouté";
     }
   }

require "view/addcustomerView.php";

?>