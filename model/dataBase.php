<?php

//But de DATABASE est d'établir une connexion à la BDD avec l'objet PDO

abstract class DataBase
{
  protected PDO $db;

  public function __construct() {
      $this->db = Connexion::getPDOConnexion();
  }
}

?>
