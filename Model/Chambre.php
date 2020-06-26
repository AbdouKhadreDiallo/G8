<?php
    class Chambre implements ICampus{
        protected $numeroChambre;
        protected $typeChambre;
        protected $numeroBatiment;

        public   function __construct($row=null){
            if($row!=null){
                $this->hydrate($row);
            }
   
        }

        public  function hydrate($row){
            $this->numeroChambre=$row['numeroChambre']; 
            $this->typeChambre=$row['typeChambre'];
            $this->numeroBatiment=$row['numeroBatiment'];
         }

        // getters
        public function getNumeroChambre(){
            return $this -> numeroChambre;
        }
        public function getTypeChambre(){
            return $this -> typeChambre;
        }
        public function getNumeroBatiment(){
            return $this -> numeroBatiment;
        }

        // setters
        public function setNumeroChambre($numeroChambre){
            $this -> numeroChambre = $numeroChambre;
        }
        public function setTypeChambre($typeChambre){
            $this -> typeChambre = $typeChambre;
        }
        public function setNumeroBatiment($numeroBatiment){
            $this -> numeroBatiment = $numeroBatiment;
        }
        

    }