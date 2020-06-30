<?php
class Validator{
   private $errors=[];

   public function getErrors(){
       return $this->errors;
   }

   public function isValid(){
      return count($this->errors)==0;
   }


   public function isVide($champ,$key,$sms="Champ Obligatoire"){
     if($champ==""){
        $this->errors[$key]=$sms;
     }
    }
    public function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    public function isNotEmail($champ,$key,$sms="Email invalid"){
      if (!filter_var($champ, FILTER_VALIDATE_EMAIL)) {
         $this->errors[$key]=$sms;
       }
    }




}