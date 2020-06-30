<?php

    include_once 'chambreDao.php';
    
    $id = $_POST['id'];
    $text = $_POST['text'];
    $column_name = $_POST['column_name'];
    $crudcontroller = new ChambreDao();
    $result = $crudcontroller->update($column_name,$text,$id);
    if ($result) {
        print_r(json_encode("champs modifié"));
    }
    // else {
    //     print_r(json_encode("nop"));
    // }
    

?>