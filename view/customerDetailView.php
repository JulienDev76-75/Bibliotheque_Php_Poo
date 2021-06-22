<?php

require "layout/header.php";

?>

      <td><?php echo $customer->getId(); ?></td>
      <td><?php echo $customer->getFirstname(); ?></td>
      <td><?php echo $customer->getLastname(); ?></td>
      <td><?php echo $customer->getAdress(); ?></td>
      <td><?php echo $customer->getMail(); ?></td>
      <td><?php echo $customer->getPhone(); ?></td>


<?php require "layout/footer.php"; ?>
