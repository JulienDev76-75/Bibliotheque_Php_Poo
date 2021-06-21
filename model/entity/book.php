<?php
// Classe représetant les livres stockés en base de données

class Book {

    //faire constante pour category
    protected ?int $id;
    private string $title;
    private string $author; 
    private string $editing; 
    private ?string $statut = null; 
    private string $category;
    private string $pitch;  
    private $loan_date; 
    private ?int $customer_id;

    //on injecte données de la bdd déclarée sous la variable $data, données possiblement nulle 
    public function __construct($data=null) {
        if($data) {
            foreach($data as $key => $value) {
                $setter = "set" . ucfirst($key);
                if(method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }

    public function setId(?int $id) {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setAuthor(string $author) {
        $this->author = $author;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setEditing(string $editing) {
        $this->editing = $editing;
    }

    public function getEditing(){
        return $this->editing;
    }

    public function setStatut(?string $statut) {
        if($statut === "1") {
            $this->statut = '<i class="fas fa-check"></i>';
          }
          else {
            $this->statut = "<i class='far fa-times-circle'></i>";
          }
    }

    public function getStatut(){
        return $this->statut;
    }

    public function setCategory(string $category) {
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setPitch(string $pitch) {
        $this->pitch = $pitch;
    }

    public function getPitch(){
        return $this->pitch;
    }

    public function setLoan_Date( $loan_date) {
            $this->loan_date = $loan_date;

    }

    public function getLoan_date() {
        return $this->loan_date;
    }

    public function setCustomer_id(?int $customer_id) {
        if($customer_id) {
        $this->customer_id = $customer_id;
        }
        else {
            $this->customer_id = NULL;
        }
    }

    public function getCustomer_id() {
        return $this->customer_id;
    }

}
