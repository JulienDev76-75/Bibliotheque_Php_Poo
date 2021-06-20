<?php 

require "model/customerManager.php";

$customer = new CustomerManager();
$result = $customer-> deleteCustomer($_GET["index"]);

?>