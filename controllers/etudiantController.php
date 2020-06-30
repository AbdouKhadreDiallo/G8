<?php
    // require_once('http://localhost/projet%20POO/G8/Model/ICampus.php');
    // require_once('http://localhost/projet%20POO/G8/Model/Etudiant.php');
    // require_once('http://localhost/projet%20POO/G8/Model/EtudiantNonboursier.php');
    // require_once('http://localhost/projet%20POO/G8/Model/etudiantBoursierNonLoge.php');
    // require_once('http://localhost/projet%20POO/G8/Model/EtudiantBoursierLoge.php');
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
    class Etudiantboursierloge extends Etudiant {
        private $bourse;
        private $numeroChambre;

        public function __construct($row = null){
            $this->profil="boursier logé";
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
            $this->bourse=$row['typeBourse'];
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
    class EtudiantNonboursier extends Etudiant {
        private $adresse;

        public function __construct($row = null){
            $this->profil="Non boursier";
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
    class EtudiantboursierNonloge extends Etudiant {
        private $bourse;

        public function __construct($row = null){
            $this->profil="boursier non loge";
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
            $this->bourse=$row['typeBourse'];
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

    class EtudiantController extends Controller{
        public  function __construct(){
            $this->folder="Etudiant";
            $this->validator = new Validator();
        }

        public function addStudent(){
            if (isset($_POST['typeEtudiant'])) {
                extract($_POST);

                $this ->dao = new EtudiantDao();

                $this -> validator -> isVide($prenom,'prenom', 'champs obligatoire');
                $this -> validator -> isVide($nom,'nom', 'champs obligatoire');
                $this -> validator -> isVide($email,'email', 'champs obligatoire');
                $this -> validator -> isNotEmail($email,'email','email invalid');
                $this -> validator -> isVide($tel,'tel', 'champs obligatoire');
                $this -> validator -> isVide($birthday,'birthday', 'champs obligatoire');
                $this -> validator -> isVide($typeEtudiant,'typeEtudiant', 'champs obligatoire');


                if ($this->validator->isvalid()) {
                    $matricule = $this ->MatriculeGenerator($nom,$prenom);
                    if ($typeEtudiant == "Non boursier") {
                        $row = ['matricule'=> $matricule, 'prenom' => $prenom,'nom' => $nom,'email' => $email,'tel' => $tel,'birthday' => $birthday,'typeEtudiant' => $typeEtudiant,'adresse' => $adresse];
                        $std = new EtudiantNonboursier($row);
                    }elseif ($typeEtudiant == "bouriser non logé") {
                        $row = ['matricule'=> $matricule, 'prenom' => $prenom,'nom' => $nom,'email' => $email,'tel' => $tel,'birthday' => $birthday,'typeEtudiant' => $typeEtudiant,'typeBourse' => $bourse];
                        $std = new EtudiantboursierNonloge($row);
                    }
                    else {
                        $row = ['matricule'=> $matricule, 'prenom' => $prenom,'nom' => $nom,'email' => $email,'tel' => $tel,'birthday' => $birthday,'typeEtudiant' => $typeEtudiant,'typeBourse' => $bourse, 'numeroChambre' => $numeroChambre];
                        $std = new Etudiantboursierloge($row);
                    }
                        $result = $this -> dao -> add($std);
                        if ($result != 1) {
                            echo 'something wrong';
                        }
                        else{
                            echo 'ok';
                        }
                    
                }

            }
        }
        public function MatriculeGenerator($nom,$prenom){
            $annee = date("Y"); // l'annee en cours
            $prenom = substr($prenom,-2); // substr($chaine, debut, longueur) Aida substr(aida, -2)= da
            $nom = substr($nom,0,2); // substr(aida, 0,2)= ai
            $rand = rand(1000,9999); // 1234
            return $annee.'-'.$nom.'-'.$prenom.'-'.$rand;  // 2020-ai-da-1234
        }
    }

    