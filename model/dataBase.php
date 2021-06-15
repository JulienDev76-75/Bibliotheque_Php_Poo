<?php
// Classe pour se connecter à la base de données

try {
    $db = new PDO('mysql:host=localhost;dbname=banque_sql;charset=utf8', 'root', '');
}

catch(Exception $error) {
    die($error->getMessage());
}

// Son usage n'est pas obligatoire, vous pouvez faire sans

class dataBase
{


}

?>
