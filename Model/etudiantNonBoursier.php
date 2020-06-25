<?php

    class EtudiantNonboursier extends Etudiant {
        private $adresse;

        public __construct($row = null){
            $this->profil="non boursier";
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
            $this->adresse=$row['adresse'];
        }

        // getters
        public function getAdresse(){
            return $this->adresse;
        }
        // setters
        public function setAdresse($adresse){
            $this->adresse=$adresse;
        }
        public function setProfil($profil){
        
        }
     
     
    }