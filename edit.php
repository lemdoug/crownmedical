<?php 
    $title = 'Edit Records';
    require_once 'includes/header.php'; 
    require_once 'includes/authcheck.php';
    require_once 'db/conn.php'; 

    $results = $crud->getParish();

    if(!isset($_GET['id']))
    {
        //echo 'Error';
        include 'includes/errormessage.php';
        header("Location viewall.php");
    }else
    {
        $id = $_GET['id'];
        $patient = $crud->getPatientDetails($id); 
     

?>



<h1 class="text-center">Update Patient Details</h1>
<form method ="post" action="editpost.php" enctype="multipart/form-data" class="mb-5" style="margin:5%">

    <input type="hidden" name="id" value="<?php echo $patient['patient_id']?>" />

    
    
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input required type="text"  class="form-control" value="<?php echo $patient['firstname']?>" id="firstname" name="firstname"/>
    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input required type="text" class="form-control" value="<?php echo $patient['lastname']?>" id="lastname" name="lastname"/>
    </div>

    <div class="mb-3">
        <label for="address1" class="form-label">Address (line 1)</label>
        <input type="text" class="form-control" value="<?php echo $patient['address1']?>" id="address1" name="address1"/>
    </div>

    <div class="mb-3">
        <label for="address2" class="form-label">Address (line 2)</label>
        <input type="text" class="form-control" value="<?php echo $patient['address2']?>" id="address2" name="address2"/>
    </div>

    <div class="mb-3">
        <label for="parish" class="form-label">Parish</label>
        <select required class="form-select" name="parish" aria-label="Default select example">
            
           <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value ='<?php echo $r['parish_id'];?>' <?php if ($r['parish_id'] == 
                $patient['parish_id']) echo 'selected' ?>> 
                <?php echo $r ['name']; ?>
            </option>
            <?php }?>
        </select>
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <input type="text" class="form-control" value="<?php echo $patient['gender']?>" id="gender" name="gender"/>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input readonly type="email" class="form-control" value="<?php echo $patient['emailaddress']?>" id="email" name="email" aria-describedby="emailHelp">
        </div>
    
 

    <div class="d-grid gap-2">
        <button class="btn btn-success" type="submit" name="submit">Submit</button>
        <a href="viewall.php" class="btn btn-danger">Back to List</a>
    </div>

</form>

<?php }?>

<?php require_once 'includes/footer.php'?>