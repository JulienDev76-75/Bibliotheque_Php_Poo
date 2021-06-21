<!-- <p>Vos livre au catalogue s'affichent sur cette page</p> -->
<?php

require "layout/header.php";

?>

<h2 class="text-center mt-5 mb-5 text-danger">La liste des livres :</h2>

<table class="table mb-5">
  <thead>
    <tr>
      <th scope="col">Numéro </th>
      <th scope="col">titre</th>
      <th scope="col">auteur</th>
      <th scope="col">edition</th>
      <th scope="col">category</th>
      <th scope="col">statut</th>
      <th scope="col">gestion</th>
    </tr>
  </thead>
  <?php foreach ($books as $book): ?>
  <tbody>
    <tr>
      <td><?php echo $book->getId(); ?></td>
      <td><?php echo $book->getTitle(); ?></td>
      <td><?php echo $book->getAuthor(); ?></td>
      <td><?php echo $book->getEditing(); ?></td>
      <td><?php echo $book->getCategory(); ?></td>
      <td><?php echo $book->getStatut(); ?></td>
      <td> <a href="book.php?id=<?php echo $book->getId();?>" class="btn btn-info">Voir détails</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<?php include ("layout/footer.php"); ?> 
