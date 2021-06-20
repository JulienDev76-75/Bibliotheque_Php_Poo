<?php

require "model/customerManager.php";
require "model/entity/customer.php";

$customerManager = new CustomerManager();
$customers = $customerManager -> getCustomers();

require "view/customerListView.php";

?>