<?php
// Classe représetant les livres stockés en base de données


// require_once "model/entity/entity.php";


class Book {

    protected ?int $id;
    private string $title;
    private string $author; 
    private string $editing; 
    private bool $statut; 
    private string $category;
    private string $pitch;  
    private ?int $loan_date; 
    private ?int $customer_id;

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

    public function setStatut(bool $statut) {
        $this->statut  = $statut;
    }

    public function getStatut(){
        return $this->statut ;
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

    public function setLoan_Date(?int $loan_date) {
        if($loan_date) {
            $this->loan_date = $loan_date;
            }
            else {
                $this->loan_date = NULL;
            }
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
    //on injecte données de la bdd déclarée sous la variable $data, données possiblement nulle 
    public function __construct(?array $data=null) {
        if($data) {
            foreach($data as $key => $value) {
                $setter = "set" . ucfirst($key);
                if(method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }

}
