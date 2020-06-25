<?php
class EtudiantDao extends Manager {


    public function __construct(){
        $this->tableName="etudiants";
        $this->className="etudiant";
    }

    public function add($matricule,$prenom,$nom,$email,$telephone,$birthday,$profil, $bourse = null, $numberChambre = null, $adresse = null){
        $sql = "INSERT INTO $this->tableName  (matricule, prenom, nom,email,tel, typeEtudiant,typeBourse,numeroChambre,adresse) VALUES ($matricule,$prenom,$nom,$email,$telephone,$birthday,$profil,$bourse,$numberChambre,$adresse)";
        return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){

    }
    





}