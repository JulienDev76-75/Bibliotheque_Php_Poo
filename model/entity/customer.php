<?php
// Classe représetant les utilisateurs stockés en base de données

class Customer {

        protected int $id;
        private string $firstname;
        private string $lastname; 
        private string $adress; 
        private string $city; 
        private string $postal_code;
        private int $age;  
        private string $mail; 
        private int $phone; 

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
 
        public function setId(int $id) {
            $this->id = $id;
        }
    
        public function getId(){
            return $this->id;
        }
    
        public function setFirstname(string $firstname) {
            $this->firstname = $firstname;
        }
    
        public function getFirstname(){
            return $this->firstname;
        }
    
        public function setLastname(string $lastname) {
            $this->lastname = $lastname;
        }
    
        public function getLastname(){
            return $this->lastname;
        }
    
        public function setAdress(string $adress) {
            $this->adress = $adress;
        }
    
        public function getAdress(){
            return $this->adress;
        }
    
        public function setCity(string $city) {
            $this->city  = $city;
        }
    
        public function getCity(){
            return $this->city ;
        }
        
        public function setPostal_code(int $postal_code) {
            $this->postal_code = $postal_code;
        }
    
        public function getPostal_code(){
            return $this->postal_code;
        }
    
        public function setAge(string $age) {
            $this->age = $age;
        }
    
        public function getAge(){
            return $this->age;
        }
    
        public function setMail(string $mail) {
            $this->mail = $mail;
        }
    
        public function getMail(){
            return $this->mail;
        }
    
        public function setPhone(int $phone) {
            $this->phone = $phone;
        }
    
        public function getPhone(){
            return $this->phone;
        }

    }

