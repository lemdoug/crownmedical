<?php 
    $title = 'Delete Verification';
    require_once 'includes/header.php'; 
    require_once 'includes\authcheck.php';
    require_once 'db/conn.php'; 

    //Get attendee by id

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location viewall.php");

    }else{
        $id = $_GET['id'];
        $result = $crud->getPatientDetails($id);


?>

    <div class="card-body text-left">
            <h3 class="card-title text-left text-danger" >Are you sure you want to delete?</h3>
        
            <img class="img-fluid rounded-circle" style ="width:10%; height:10%"src="<?php echo empty($result['avatar_path']) ? "uploads/default.png" : $result['avatar_path']?>"/>

            <h4 class="card-text"> <?php echo $result['firstname'] . ' ' . $result['lastname']; ?> </h4>
            <br/>
            <h6 class="card-text"> <?php echo 'Contact details: ' . $result['emailaddress']. ' || ' . $result['contactnumber']; ?> </h6>
            <h6 class="card-text"> <?php echo 'Date of birth: ' . $result['dateofbirth']; ?> </h6>
            <h6 class="card-text"> <?php echo 'Address: ' . $result['address1'] . ', ' . $result['address2'] . ', ' . $result['name']; ?> </h6>
            
            <a href="viewall.php" class="btn btn-primary">Cancel</a>
            <a href = 'delete.php?id=<?php echo $result['patient_id']?>' class= "btn btn-danger" >Delete</a>
        </div>
        
        <div class="card-footer text-muted">
    </div>
    
    <?php } ?>

<?php require_once 'includes/footer.php'; ?>   