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
      
        //check if email exists
        $email_exists = false;
        $stmt = $pdo->prepare("select `patient_id` from patient where emailaddress = :email");
        $stmt->execute(array(':email'=> $email));
        
        if ($stmt->rowCount()>0){
            $email_exists = true;
            ?>
                <div class="card-body text-left mb-5">
                <h3 class="card-title text-center" > <?php echo 'This email address is already registered!'?></h3>
      
                <h6 class="card-text" style="margin:5%"> Click the button below to return to the registration form.</h6>
       
                <a href="registration.php" class="btn btn-danger">Back</a>
            </div>
            
            <?php
            }
        else{
            try{
            //call function to insert and tracks if it was successful or not
            $isSuccess = $crud->insertPatient($firstname,$lastname,$address1,$address2,$parish,$gender,$email,$destination);
            $specialtyName = $crud->getParishbyID($parish);
            ?>
            <div class="card-body text-left mb-5">
                <h3 class="card-title text-center" > <?php echo 'Thank you for registering' .' '. $_POST['firstname'] ; ?></h3>
      
                <h6 class="card-text" style="margin:5%"> Please check your email for a Crown Medical starter pack!</h6>
       
                <a href="index.php" class="btn btn-primary">Continue</a>
            </div>
            
            <?php
                }catch(PDOException $e){
                    echo $e->getMessage();
                    return false;
            }
            }
        }

    ?>
    
<?php require_once 'includes/footer.php'; ?>   