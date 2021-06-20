<?php

require "model/customerManager.php";
require "model/entity/customer.php";

$customerManager = new CustomerManager();
$customers = $customerManager -> getCustomers();
var_dump($customers);

require "view/customerListView.php";

?>