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
    $customers = $query->fetchAll(PDO::FETCH_ASSOC);
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

  // Récupère un utilisateur par son code personnel - générer code personnel par fonction aléatoire -> 
  public function getCustomer() {

  }

  // Supprimer un utilisateur de la bdd
  public function deleteCustomer(Customer $customer) {
    $query = $this->db->prepare("DELETE FROM book WHERE id = :id");
    $result = $query->execute([
        'id' => $customer->getId(),
    ]);
    return $result;
  } 

  // ajouter un utilisateur de la bdd
  public function addCustomer(Customer $customer) {
    $query = $this->db->prepare("INSERT INTO customer(firstname, lastname, adress, city, postal_code, mail, phone) VALUES(:firstname, :lastname, :adress, :city, :postal_code, :mail, :phone)");
    $result = $query->execute([
      'firstname' => $customer->getFirstname(),
      'lastname' => $customer->getLastname(),
      'adress' => $customer->getAdress(),
      'city' => $customer->getCity(),
      'postal_code' => $customer->getPostal_code(),
      'mail' => $customer->getMail(),
      'phone' => $customer->getPhone(),
      ]);
    return $result;
  } 
}
