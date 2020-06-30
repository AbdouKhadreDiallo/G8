<?php
if(isset($_POST["id"])) {
    include_once 'EtudiantDao.php';
    $crudcontroller = new EtudiantDao();
    $result = $crudcontroller->deleteStd($_POST["id"]);
    if ($result) {
        print_r(json_encode("Records deleted successfully"));
    }
    else {
        print_r(json_encode("wrong"));
    }
   
}
?>