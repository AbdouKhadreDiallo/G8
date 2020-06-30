<?php
    class ChambreController extends Controller{
        public  function __construct(){
            $this->folder="Chambre";
        }

        public function addChamber(){
            if (isset($_POST['selection-dropdown'])) {
                extract($_POST);
            
                $this->dao = new ChambreDao();
                $this -> validator -> isVide($numeroBat,'numeroBat', 'champs obligatoire');
                $this -> validator -> isVide($typeChambre,'typeChambre', 'champs obligatoire');
                if ($this->validator->isvalid()) {
                    $numeroChambre = $this -> NumeroChambreGenerator($numeroBat);
                    $row = ['numeroChambre' => $numeroChambre, 'typeChambre' => $typeChambre, 'numeroBatiment' => $numeroBat];
                    $chambre = new Chambre($row);
                    
                    $result = $this ->dao->add($chambre);

                    if ($result != 0) {
                        echo 'something wrong';
                    }else {
                        echo 'ok';
                    }
                }
            }
        }

        public function NumeroChambreGenerator($bat){
            if (strlen($bat) == 1) {
                $result = '00'.$bat;
            }
            elseif (strlen($bat) == 2) {
                $result = '0'.$bat;
            }
            else {
                $result = $bat;
            }
            return $result.'-'.rand(1000,9999);
        }
    }