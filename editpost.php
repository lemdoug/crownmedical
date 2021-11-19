<?php 
    
    require_once 'db/conn.php';
    

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $parish = $_POST['parish'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $contact = $_POST['phone'];

        

        $result = $crud->editPatient($id, $firstname, $lastname, $address1, $address2, $parish, $dob, $gender, $contact);

        if($result){
            header("Location: viewall.php");
        }
        else{
            include 'includes/errormessage.php';
            header("Location viewall.php");
        }
    }else{
        include 'includes/errormessage.php';
        header("Location viewall.php");
    }
?>