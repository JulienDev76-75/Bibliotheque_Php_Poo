<?php
// Controleur qui gère l'affichage du détail d'un utilisateur

require "model/entity/book.php";
require "model/customerManager.php";
require "model/entity/customer.php";

// $bookManager = new BookManager();
// $customer = $bookManager->getCustomerById();

$customerManager = new CustomerManager();
$customer = $customerManager->getCustomerById($_GET["id"]);


require "view/customerDetailView.php";

?>



