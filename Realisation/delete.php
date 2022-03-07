<?php
    include "employeeManager.php";

if(isset($_GET['id'])){

    $employeeManager = new EmployeeManager();
    $id = $_GET['id'] ;
    $employeeManager->delete($id);
        
    header('Location: index.php');
}
?>