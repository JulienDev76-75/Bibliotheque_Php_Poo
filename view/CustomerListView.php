<?php

require "layout/header.php";

?>
<section>

<span><h1 class="text-center text-danger mt-5 mb-5">Liste des utilisateurs</h1></span>
<table class="table mb-5">
  <thead>
    <tr>
      <th scope="col">Identifiant</th>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      <th scope="col">Code Postal</th>
      <th scope="col">Age</th>
      <th scope="col">E-mail</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Gestion</th>
    </tr>
  </thead>
  <?php foreach ($customers as $customer): ?>
  <tbody>
    <tr>
      <td><?php echo $customer->getId(); ?></td>
      <td><?php echo $customer->getFirstname(); ?></td>
      <td><?php echo $customer->getLastname(); ?></td>
      <td><?php echo $customer->getAdress(); ?></td>
      <td><?php echo $customer->getCity(); ?></td>
      <td><?php echo $customer->getPostal_code(); ?></td>
      <td><?php echo $customer->getAge(); ?></td>
      <td><?php echo $customer->getMail(); ?></td>
      <td><?php echo $customer->getPhone(); ?></td>
      <td> <a href="user.php?id=<?php echo $customer->getId();?>" class="btn btn-info">Gérer</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</section>

<?php 

require "layout/footer.php"; 

?> 
