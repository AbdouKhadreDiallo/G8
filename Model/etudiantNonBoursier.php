<?php

    class EtudiantNonboursier extends Etudiant {
        private $adresse;

        public __construct($row = null){
            $this->profil="Non boursier";
            if($row!=null){
                $this->hydrate($row);
            }
        }
        public  function hydrate($row){
            $this->matricule=$row['id']; 
            $this->prenom=$row['prenom'];
            $this->nom=$row['nom'];  
            $this->email=$row['email']; 
            $this->tel=$row['tel'];
            $this->birthday=$row['birthday']; 
            $this->typeEtudiant=$row['typeEtudiant'];
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
        public function settypeEtudiant($typeEtudiant){
        
        }
     
     
    }