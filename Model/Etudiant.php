<?php
    class Etudiant implements ICampus{
        protected $matricule;
        protected $nom;
        protected $prenom;
        protected $email;
        protected $telephone;
        protected $birthday;
        protected $profil;

        public   function __construct($row=null){
            if($row!=null){
                $this->hydrate($row);
            }
   
        }

        public  function hydrate($row){
            $this->matricule=$row['id']; 
            $this->prenom=$row['prenom'];
            $this->nom=$row['nom'];  
            $this->email=$row['email']; 
            $this->telephone=$row['telephone'];
            $this->birthday=$row['birthday']; 
            $this->profil=$row['profil']; 
         }

        // getters
        public function getMatricule(){
            return $this -> matricule;
        }
        public function getNom(){
            return $this -> nom;
        }
        public function getPrenom(){
            return $this -> prenom;
        }
        public function getTelephone(){
            return $this -> telephone;
        }
        public function getBirthday(){
            return $this -> birthday;
        }
        public function getProfil(){
            return $this -> profil;
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
        public function setTelephone($telephone){
            $this -> telephone = $telephone;
        }
        public function setBirthday($birthday){
            $this -> birthday = $birthday;
        }
        public function setProfil($profil){
            $this -> profil = $profil;
        }

    }