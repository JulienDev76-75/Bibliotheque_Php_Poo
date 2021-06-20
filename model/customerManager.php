<?php

require "connexion.php";

class CustomerManager {

  private PDO $db;

  public function __construct() {
    $this->db = Connexion::getPDOConnexion();
  }

  // Récupère tous les utilisateurs
  public function getCustomers() {
    $query = $this->db->query("SELECT * FROM customer");
    //on spécifie comment on récupère les éléments : ici FETCH_ASSOC
    $customers = $query->fetchAll(PDO::FETCH_ASSOC);
    // je transforme chaque entrée du tableau en OBJET en l'hydratant, on convertit le tab. associatif du Fetch en objet
    // Rappel : index de la ligne ou entrée => nom de la colonne -> ex: "echo $books[0][title]
    foreach($customers as $key => $customer) {
    $customers[$key] = new Customer($customer);
    }
    return $customers;
  }


  // Récupère un utilisateur par son id
  public function getCustomerById(string $id) {
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
