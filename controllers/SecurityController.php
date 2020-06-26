<?php

class SecurityController extends Controller{

   public  function __construct(){
      $this->folder="security";
      $this->layout="defaut";
    //   $this->validator=new Validator();
    
   }

    public function index(){
        $this->view="ajouterEtudiant";
        $this->render();
    }
    public function liste(){
        $this->view="listeEtudiant";
        $this->render();
    }
    public function addChambre(){
        $this->view="addChambre";
        $this->render();
    }


    public function supprimer(){
        $this->view="listechambre";
        $this->dao = new ChambreDao();

        $chambre = $this->dao->deleteChambre();
        $this->render();
    }

    public function listechambre(){
        $this->view="listechambre";
        $this->dao = new ChambreDao();

        $chambre = $this->dao->getChambre();
        $this->render();
    }


    public function addTudent(){
        if (isset($_POST['enregistrer'])) {
            extract($_POST);
            $this->dao= new EtudiantDao();
            $user=$this->dao->add('aze',$prenom,$nom,$email,$telephone,$birthday,$profil,$adresse);
            var_dump($user);
            if ($user != null) {
                var_dump($user);
            }
        }
    }
}