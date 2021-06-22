<?php 

require "model/customerManager.php";

$customerManager = new CustomerManager();
$result = $customerManager-> deleteCustomer($_POST["id"]);

$bookManager = new BookManager();
$result = $bookManager-> deleteBook($_POST["id"]);


if(isset($_POST["deletebook"]) && $statut === 0) {
    if($bookManager->deleteBook($_POST["id"])){
      echo "<p>Votre livre a bien été effacé</p>";
      header("Location: index.php");
      exit();
    }
  }

  if(isset($_POST["deletecustomer"])) {
    if($customerManager->deleteCustomer($_POST["id"])){
      echo "<p>Votre livre a bien été effacé</p>";
      header("Location: customersList.php");
      exit();
    }
  }

?>