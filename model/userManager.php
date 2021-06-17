<?php

require "dataBase.php";

class userManager {

  // Récupère tous les utilisateurs
  public function getUsers() {

  }

  // Récupère un utilisateur par son id
  public function getUserById(string $id) {
    $query= $this->db->prepare("SELECT * FROM customer WHERE id=:id");
    $query->execute([
        "id" => $id
     ]);
    $response = $query->fetch(PDO::FETCH_ASSOC);
    $result = new Customer($response);
    return $result;    
  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
