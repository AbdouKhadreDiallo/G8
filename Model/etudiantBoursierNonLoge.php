<?php

    class EtudiantboursierNonloge extends Etudiant {
        private $bourse;

        public __construct($row = null){
            $this->profil="boursier non loge";
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
            $this->bourse=$row['bourse'];
        }

        // getters
        public function getBourse(){
            return $this->bourse;
        }

        // setters
        public function setBourse($bourse){
            $this->bourse=$bourse;
        }
        public function setProfil($profil){
        
        }
     
     
    }