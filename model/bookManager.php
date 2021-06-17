<?php

require "connexion.php";

class BookManager {

  private PDO $db;

  public function __construct() {
  $this->db = Connexion::getPDOConnexion();
}

  // Récupère le détail d'un livre et son emprunteur = Jointure customer / book
  public function getBook() {
  }

  // Récupère toute la liste de livres pour le catalogue
  public function getBooks() {
    $query = $this->db->query("SELECT * FROM book");
    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    //je transforme chaque entrée du tableau en OBJET en l'hydratant, on convertit le tab. asosciatif du Fetch en objet
    foreach($books as $key => $book) {
    $books[$key] = new Book($book);
    }
    return $books;
  }

  // Ajoute un nouveau livre
  //paramètre au sein de la fonction addBook(objet Book, variable "random" $book)
  public function addBook(Book $book) {
    $query = $this->db->prepare("INSERT INTO book(title, author, editing, statut, category, pitch) VALUES(:title, :author, :editing, :statut, :category, :pitch)");
    $result = $query->execute([
      'title' => $book->getTitle(),
      'author' => $book->getAuthor(),
      'editing' => $book->getEditing(),
      'statut' => $book->getStatut(),
      'category' => $book->getCategory(),
      'pitch' => $book->getPitch(),
      ]);
    return $result;     
  }

  // Met à jour le statut d'un livre emprunté à savoir s'il prêté OU non
  public function updateAccount(Book $book) {
    $query = $this->db->prepare("UPDATE boox SET statut = :statut WHERE id = :id ");
    $result = $query->execute([
      'statut' => $book->getstatut(),
      'id' => $book->getId(),
    ]);
    return $result;
  }

  public function deleteBook(Book $book) {
    $query = $this->db->prepare("DELETE FROM book WHERE id = :id");
    $result = $query->execute([
        'id' => $book->getID(),
    ]);
    return $result;
  } 
}
