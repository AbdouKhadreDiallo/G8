<?php
    class Etudiant implements ICampus{
        protected $matricule;
        protected $nom;
        protected $prenom;
        protected $email;
        protected $tel;
        protected $birthday;
        protected $typeEtudiant;

        public   function __construct($row=null){
            if($row!=null){
                $this->hydrate($row);
            }
   
        }

        public  function hydrate($row){
            $this->matricule=$row['matricule']; 
            $this->prenom=$row['prenom'];
            $this->nom=$row['nom'];  
            $this->email=$row['email']; 
            $this->tel=$row['tel'];
            $this->birthday=$row['birthday']; 
            $this->typeEtudiant=$row['typeEtudiant'];
            
         }

        // getters
        public function getMatricule(){
            return $this -> matricule;
        }
        public function getNom(){
            return $this -> nom;
        }
        public function getEmail(){
            return $this -> email;
        }
        public function getPrenom(){
            return $this -> prenom;
        }
        public function getTel(){
            return $this -> tel;
        }
        public function getBirthday(){
            return $this -> birthday;
        }
        public function gettypeEtudiant(){
            return $this -> typeEtudiant;
        }

        // setters
        public function setMatricule($matricule){
            $this -> matricule = $matricule;
        }
        public function setNom($nom){
            $this -> nom = $nom;
        }
        public function setPrenom($prenom){
            $this -> prenom = $prenom;
        }
        public function setTelephone($tel){
            $this -> tel = $tel;
        }
        public function setBirthday($birthday){
            $this -> birthday = $birthday;
        }
        public function settypeEtudiant($typeEtudiant){
            $this -> typeEtudiant = $typeEtudiant;
        }

    }