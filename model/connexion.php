<?php
//classe qui n'a pas vocation à être instanciée
abstract class Connexion {
  const HOST = "localhost";
  const DBNAME = "biblio_sql";
  const USER = "root";
  const PASSWORD = "";
  //la connexion à l'objet PDO(PHP DATA OBJECT) est inséré dans une fonction/méthode
  public static function getPDOConnexion() {
    try {
      // Make a factory to create a single instance of PDO (see singleton pattern)
      // We need to always get the same instance of PDO for the transactions (lock issue)
      //on instancie un objet PDO avec la connexion à la bdd
        $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;
    } 
    catch (\Exception $e) {
      //on rattrape l'erreur avec Exception, class Exception qui affiche les erreurs avec getMessage() -> gère de manière plus précise les erreurs
      echo "Erreur lors de la connexion à la base de donée: " . $e->getMessage() . "<br/>";
      die();
    }
  }

}