<?php

    class Etudiantboursierloge extends Etudiant {
        private $bourse;
        private $numeroChambre;

        public __construct($row = null){
            $this->profil="boursier loge";
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
            $this->bourse=$row['bourse'];
            $this->numeroChambre=$row['numeroChambre'];
        }

        // getters
        public function getBourse(){
            return $this->bourse;
        }
        public function getNumeroChambre(){
            return $this->numeroChambre;
        }

        // setters
        public function setBourse($bourse){
            $this->bourse=$bourse;
        }
        public function setNumeroChambre($numeroChambre){
            $this->numeroChambre=$numeroChambre;
        }
        public function setProfil($profil){
        
        }
     
     
    }