<?php
require "layout/header.php";
var_dump($book);
?>

<div class="card" style="width: 10rem;">
  <div class="card-body">
    <h5 class="card-title"><?php $book->getTitle()?></h5>
    <p class="card-title"><?php $book->getAuthor()?></p>
    <p class="card-title"><?php $book->getEditing()?></p>
    <p class="card-title"><?php $book->getLoan_date()?></p>


    <a href="delete.php?id=<?php echo $book->getId();?>" class="btn btn-dark text-danger m-4">Supprimer livre</a>
    <a href="updatebook.php?id=<?php echo $book->getId();?>" class="btn btn-dark text-danger m-4">Modifier</a>
  </div>
</div>



<?php 
require "layout/footer.php"; 
?> 
