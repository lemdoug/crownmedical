<?php 
    $title = 'View Patient Detail';
    require_once 'includes/header.php'; 
    require_once 'includes\authcheck.php';
    require_once 'db/conn.php'; 


    //Get attendee by id

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';

    }else{
        $id = $_GET['id'];
        $result = $crud->getPatientDetails($id);
        $ext = pathinfo($result['avatar_path'],PATHINFO_EXTENSION);


?>
    
    
    <div class="card-body text-left mb-5">
            <h3 class="card-title text-center" >Patient details</h3>
        
            <img class="img-fluid rounded-circle" style ="width:10%; height:10%"src="<?php echo empty($ext) ? "uploads\default.png" : $result['avatar_path']?>"/>

            <h4 class="card-text"> <?php echo $result['firstname'] . ' ' . $result['lastname']; ?> </h4>
            <br/>
            <h6 class="card-text"> <?php echo 'Contact details: ' . $result['emailaddress']. ' || ' . $result['contactnumber']; ?> </h6>
            <h6 class="card-text"> <?php echo 'Date of birth: ' . $result['dateofbirth']; ?> </h6>
            <h6 class="card-text"> <?php echo 'Address: ' . $result['address1'] . ', ' . $result['address2'] . ', ' . $result['name']; ?> </h6>

            
            <br/>
            <a href="viewall.php" class="btn btn-primary">Back</a>
            <a href = 'edit.php?id=<?php echo $result['patient_id']?>' class= "btn btn-secondary" >Edit</a>
            <a href = 'deletecheck.php?id=<?php echo $result['patient_id']?>' class= "btn btn-danger" >Delete</a>
        </div>
        
        <div class="card-footer text-muted">
    </div>
    
    <?php } ?>

<br/>
<br/>
<br/>
<br/>
<br/>

<?php require_once 'includes/footer.php'; ?>   