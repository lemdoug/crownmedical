<?php 
    $title = 'Delete Verification';
    require_once 'includes/header.php'; 
    require_once 'includes/authcheck.php';
    require_once 'db/conn.php'; 

    //Get attendee by id

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location viewall.php");

    }else{
        $id = $_GET['id'];
        $result = $crud->getPatientDetails($id);
        $ext = pathinfo($result['avatar_path'],PATHINFO_EXTENSION);


?>

    <div class="card-body text-left">
            <h3 class="card-title text-left text-danger" >Are you sure you want to delete?</h3>
        
            <img class="img-fluid rounded-circle" style ="width:10%; height:10%"src="<?php echo empty($ext) ? "uploads\default.png" : $result['avatar_path']?>"/>

            <h4 class="card-text"> <?php echo $result['firstname'] . ' ' . $result['lastname']; ?> </h4>
            <br/>
            <h6 class="card-text"> <?php echo 'Contact details: ' . $result['emailaddress']?> </h6>
            <h6 class="card-text"> <?php echo 'Address: ' . $result['address1'] . ', ' . $result['address2'] . ', ' . $result['name']; ?> </h6>
            
            <a href = 'delete.php?id=<?php echo $result['patient_id']?>' class= "btn btn-danger" >Confirm</a>
            <a href="viewall.php" class="btn btn-primary">Cancel</a>
        </div>
        
        <div class="card-footer text-muted">
    </div>
    
    <?php } ?>

<?php require_once 'includes/footer.php'; ?>   