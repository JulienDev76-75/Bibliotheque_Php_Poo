<?php
// Classe représetant les utilisateurs stockés en base de données
class User {

        protected int $id;
        private string $firstname;
        private string $lastname; 
        private string $profession; 
        private string $number_secu; 
        private string $birthday;
        private string $city;  
        private int $postal_code; 
        private string $country; 
        private string $mail; 
        private string $customer_password;
        private int $phone;
    
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
    
        public function setProfession(string $profession) {
            $this->profession = $profession;
        }
    
        public function getProfession(){
            return $this->profession;
        }
    
        public function setNumber_secu(int $number_secu) {
            $this->number_secu  = $number_secu;
        }
    
        public function getNumber_secu(){
            return $this->number_secu ;
        }
    
        public function setBirthday(string $birthday) {
            $this->birthday = $birthday;
        }
    
        public function getBirthday(){
            return $this->birthday;
        }
    
        public function setCity(string $city) {
            $this->city = $city;
        }
    
        public function getCity(){
            return $this->city;
        }
    
        public function setPostal_code(int $postal_code) {
            $this->postal_code = $postal_code;
        }
    
        public function getPostal_code(){
            return $this->postal_code;
        }
    
        public function setCountry(string $country) {
            $this->country = $country;
        }
    
        public function getCountry(){
            return $this->country;
        }
    
        public function setMail(string $mail) {
            $this->mail = $mail;
        }
    
        public function getMail(){
            return $this->mail;
        }
    
        public function setCustomer_password(string $customer_password) {
            $this->customer_password = $customer_password;
        }
    
        public function getCustomer_password(){
            return $this->customer_password;
        }
    
        public function setPhone(int $phone) {
            $this->phone = $phone;
        }
    
        public function getPhone(){
            return $this->phone;
        }
    
    
    
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

