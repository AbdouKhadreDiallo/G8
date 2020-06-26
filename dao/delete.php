<?php
if(isset($_POST["id"])) {
    include_once 'chambreDao.php';
    $crudcontroller = new ChambreDao();
    $result = $crudcontroller->deleteChambre($_POST["id"]);
    print_r(json_encode("Records deleted successfully"));
}
?>