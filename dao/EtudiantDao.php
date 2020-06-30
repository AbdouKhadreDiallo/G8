<?php

interface ICampus{
    //Abstraites
      public function hydrate($row);
}
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

interface IDao{
    public function add($obj);
    public function update($column_name, $id);
    public function delete($id);
    public function findAll();
    public function findById($id);
}
abstract class Manager implements IDao{
    //Connexion est Fermée
    private $pdo=null;
    protected $tableName;
    protected $className;

  private function getConnexion(){
      //Connexion est fermée
      if($this->pdo==null){
          try{
            $this->pdo = new PDO("mysql:host=localhost;port=3308;dbname=g8_project","root","");
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
          }catch(PDOException $ex){
             die("Erreur de Connexion");
          }
        
      }
      
  }

 private function closeConnexion(){
      
    if($this->pdo!=null){
      $this->pdo=null;
    }
  }

  public function executeUpdate($sql){
          $this->getConnexion();
           $nbreLigne= $this->pdo->exec($sql);
          $this->closeConnexion();
          return $nbreLigne;
   }

  public function executeSelect($sql){
      
    $this->getConnexion();
    //Traitement
      $result=$this->pdo->query($sql);
      $data=[];
      foreach( $result as $rowBD){
        //ORM=> tuple BD transformer en Objet
        $data[]=new $this->className($rowBD);//new User($rowBD)     
      }
      $this->closeConnexion();
      return $data;

  }

  public function findAll(){
    $sql="select * from $this->tableName";
    $data=$this->executeSelect($sql);
    return $data;
  }
public function findById($id){
    $sql="select * from $this->tableName where id=$id ";
    $data=$this->executeSelect($sql);
    return count($data)==1?$data[0]:$data;

}

public function delete($id){
    $sql="delete from `$this->tableName` where numeroChambre='$id'";
    return $this->executeUpdate($sql)!=0;
}
public function deleteStdd($id){
    $sql="delete from `$this->tableName` where matricule='$id'";
      return $this->executeUpdate($sql)!=0;
  }
public function preparer($sql){
  $this->getConnexion();
  return $this->pdo->prepare($sql);
}





    //Connexion
    //FermerConnexion
    //Executer une requete et Retourner un Résultat
       //Execution Requete MaJ(Insert,Update,delete)
       //Execution requete Select

    
}
class EtudiantDao extends Manager {


    public function __construct(){
        $this->tableName="etudiants";
        $this->className="Etudiant";
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
        public function getStd(){
            return $this -> findAll();
        }
        public function deleteStd($id){
            return $this -> deleteStdd($id);
        }





}