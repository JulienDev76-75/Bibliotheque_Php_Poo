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
    //on spécifie comment on récupère les éléments : ici FETCH_ASSOC
    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    // je transforme chaque entrée du tableau en OBJET en l'hydratant, on convertit le tab. associatif du Fetch en objet
    // Rappel : index de la ligne ou entrée => nom de la colonne -> ex: "echo $books[0][title]
    foreach($books as $key => $book) {
    $books[$key] = new Book($book);
    }
    return $books;
  }

  // Ajoute un nouveau livre
  //paramètre au sein de la fonction addBook(objet Book, variable "random" $book)
  public function addBook(Book $book) {
    //j'insère les attributs (entrées dans BDD) dans la table book 
    //on sécurisé la requête avec prépare () qui sépare le traitement des données et l'éxécution des données 
    //exemple :title : "marqueur nommé" -> but est de sécuriser les données rentrées
    $query = $this->db->prepare("INSERT INTO book(title, author, editing, statut, category, pitch) VALUES(:title, :author, :editing, :statut, :category, :pitch)");
    //une fois la requête préparée et stockée dans $query, on fait appelle à la méhode execute() pour lancer la requête
    //la requête execute est placé dans un tableau array []
    $result = $query->execute([
      //on va à la colonne Title et on remplace le champs par la valeur donnée dans le formulaire
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
