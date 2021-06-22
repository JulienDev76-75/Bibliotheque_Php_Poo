<?php
//si on a dans la barre d'url l'id du livre alors :
if(isset($_GET("id")) && isset($_POST["submit"])) {
    if(empty($_POST["statut"]) && is_numeric($_POST("statut"))) {
        $statut = htmlspecialchars($_POST["statut"]);
        echo "<p> Veuillez rentrer un '0' si le livre n'est pas emprunté ou un '1' si le livre est emprunté</p>";
    }
    else {
     $bookManager -> updateBook();
     echo "<p>votre livre a bien été modifié</p>";
     header("Location : index.php");
     exit();
    }
}

?>


