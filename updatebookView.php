<!-- a mettre dans la view -->
<?php
require "header.php";
?>

<h2 class="text-center mt-5 text-danger">Modification du statut du livre</h2>

<div>
<form action="updatebook" method="post">
    <input type="text" id="statut" name="statut" value="<?php $book['statut'] ?>">
    <input type="submit" name="submit" value="Enregistrer">
</form>
</div>

<?php
require "footer.php";
?>