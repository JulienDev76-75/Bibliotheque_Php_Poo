<?php

require "connexion.php";
// require "model/entity/book.php";


class BookManager {

  private PDO $db;

  public function __construct() {
  $this->db = Connexion::getPDOConnexion();
}

  // Récupère tous les livres
  public function getBook() {
  }

  // Récupère un livre
  public function getBooks() {
    $query = $this->db->query("SELECT * FROM book");
    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($books as $key => $book) {
    $books[$key] = new Book($book);
    }
    return $books;
  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

}
