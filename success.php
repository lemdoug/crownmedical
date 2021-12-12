<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    //require_once 'sendemail.php';

    
    

    if(isset($_POST['submit'])){
        //extracts values from the $_POST array 
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $parish = $_POST['parish'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        
        $orig_file = $_FILES["pic"]["tmp_name"];
        $target_dir = 'uploads/';
        $ext = pathinfo($_FILES["pic"]["name"], PATHINFO_EXTENSION);
        $destination = "$target_dir$email.$ext";
        move_uploaded_file($orig_file,$destination);
      
        //call function to insert and tracks if it was successful or not
        $isSuccess = $crud->insertPatient($firstname,$lastname,$address1,$address2,$parish,$gender,$email,$destination);
        $specialtyName = $crud->getParishbyID($parish);
       

    }
?>

    
    <div class="card-body text-left mb-5">
        <h3 class="card-title text-center" > <?php echo 'Thank you for registering' .  $_POST['firstname'] . ' ' . $_POST['lastname']; ?></h3>
      
        <h6 class="card-text"> Please click the button below to return to the home page</h6>
       
        <a href="index.php" class="btn btn-primary">Continue</a>
        </div>
    <div class="card-footer text-muted">
</div>



<?php require_once 'includes/footer.php'; ?>   