<?php 
    require_once 'includes/authcheck.php';
    require_once 'db/conn.php'; 
    
    
    if(!$_GET['id']){
        include 'includes/errormessage.php';
    }else{
        $id = $_GET['id'];
    }

   $result = $crud->deletePatient($id);

    if($result)
    {
        header ("Location: viewall.php");
    }else{
        include 'includes/errormessage.php';
    }



?>