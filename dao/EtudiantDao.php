<?php
class EtudiantDao extends Manager {


    public function __construct(){
        $this->tableName="etudiants";
        $this->className="etudiant";
    }

    public function add($etudiant){
        $matricule = $etudiant -> getMatricule();
        $Nom = $etudiant -> getNom();
        $Prenom = $etudiant -> getPrenom();
        $Tel = $etudiant -> getTel();
        $Birthday = $etudiant -> getBirthday();
        $Email = $etudiant -> getEmail();
        $typeEtudiant = $etudiant -> gettypeEtudiant();
        if ($typeEtudiant == "Non boursier") {
            $adresse = $etudiant -> getAdresse();
            $sql = "INSERT INTO etudiants (matricule,prenom,nom,email,tel,birthday,typeEtudiant,adresse) VALUES ('$matricule','$Prenom','$Nom','$Email','$Tel','$Birthday','$typeEtudiant','$adresse')";
            $data = $this -> executeUpdate($sql);
        } elseif ($typeEtudiant == "bouriser non logé") {
            $bourse = $etudiant -> getBourse();
            $sql = "INSERT INTO etudiants (matricule,prenom,nom,email,tel,birthday,typeEtudiant,typeBourse) VALUES ('$matricule','$Prenom','$Nom','$Email','$Tel','$Birthday','$typeEtudiant','$bourse')";
            $data = $this -> executeUpdate($sql);
        }
        else {
            $bourse = $etudiant -> getBourse();
            $numeroChambre = $etudiant -> getNumeroChambre();
            $sql = "INSERT INTO etudiants (matricule,prenom,nom,email,tel,birthday,typeEtudiant,typeBourse,numeroChambre) VALUES ('$matricule','$Prenom','$Nom','$Email','$Tel','$Birthday','$typeEtudiant','$bourse','$numeroChambre')";
            $data = $this -> executeUpdate($sql);
        }
        
        return $data;
        
        
     }
     public function update($column_name, $id){

        }
    





}