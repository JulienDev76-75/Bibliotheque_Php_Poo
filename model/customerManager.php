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

  // public function getBooksByCategory(string $category) {
  //   $query = $this->_db->prepare("SELECT id, author, title, editing, statut, category FROM book WHERE category = :category");
  //   $query->execute([ 
  //     category = $category
  //   ]);
  //   $kind = $query->fetchAll(PDO::FETCH_ASSOC);
  //   foreach ($kind as $key => $value) {
  //     $kind[$key] = new Book($value);
  //   }
  //   return $kind;
  // }

  // Récupère un utilisateur par son id
  public function getCustomerById(int $id) {
    $query= $this->db->prepare("c.id, c.firstName, c.lastName, c.adress, c.city, c.phone, c.mail, b.title, b.editing, b.loan_date, b.statut
    FROM customer AS c LEFT JOIN book AS b ON b.customer_id = c.id");
    $query->execute([
        "id" => $id
     ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;    
  }

  // Récupère un utilisateur par son code personnel - générer code personnel par fonction aléatoire -> 
  public function getCustomer() {

  }

  // Supprimer un utilisateur de la bdd
  public function deleteCustomer(int $id) {
    $query = $this->db->prepare("DELETE FROM customer WHERE id=:id LIMIT 1");
    $result = $query->execute([
        'id' => $id,
    ]);
    return $result;
  } 

  // ajouter un utilisateur de la bdd
  public function addCustomer(Customer $customer) {
    $query = $this->db->prepare("INSERT INTO customer(firstname, lastname, adress, city, postal_code, age, mail, phone) VALUES(:firstname, :lastname, :adress, :city, :postal_code, :age, :mail, :phone)");
    $result = $query->execute([
      'firstname' => $customer->getFirstname(),
      'lastname' => $customer->getLastname(),
      'adress' => $customer->getAdress(),
      'city' => $customer->getCity(),
      'postal_code' => $customer->getPostal_code(),
      'age' => $customer->getAge(),
      'mail' => $customer->getMail(),
      'phone' => $customer->getPhone(),
      ]);
    return $result;
  } 
}
