<?php 

require "model/customerManager.php";

$customer = new CustomerManager();
$result = $customer-> deleteCustomer($_GET["index"]);

$bookManager = new BookManager();
//si le statut === 1 alors emprunté alors ne peut être supprimé
$result = $bookManager-> deleteBook($_GET["index"]);

?>