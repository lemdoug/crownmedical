<?php 
    $title = 'Edit Records';
    require_once 'includes/header.php'; 
    require_once 'includes\authcheck.php';
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
        $attendee = $crud->getPatientDetails($id); 
    
    

?>

<h1 class="text-center">Update Patient Details</h1>

<form method ="post" action="editpost.php" style="margin:5%">
    <input type="hidden" name="id" value="<?php echo $patient['patient_id']?>" />

    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input required type="text"  class="form-control" id="firstname" name="firstname"/>
    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname"/>
    </div>

    <div class="mb-3">
        <label for="address1" class="form-label">Address (line 1)</label>
        <input type="text" class="form-control" id="address1" name="address1"/>
    </div>

    <div class="mb-3">
        <label for="address2" class="form-label">Address (line 2)</label>
        <input type="text" class="form-control" id="address2" name="address2"/>
    </div>

    <div class="mb-3">
        <label for="parish" class="form-label">Parish</label>
        <select required class="form-select" name="parish" aria-label="Default select example">
            
           <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value ='<?php echo $r['parish_id'];?>'><?php echo $r ['name']; ?></option>
            <?php }?>
        </select>
    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob"/>
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <input type="text" class="form-control" id="gender" name="gender"/>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Contact number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>

    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </div>

</form>

<?php }?>

<?php require_once 'includes/footer.php'; ?>   
