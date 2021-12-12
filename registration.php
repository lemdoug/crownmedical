<?php 

    $title = 'Registration';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 

    $results = $crud->getParish();

?>

<div class="img-container">
    <img src="images/registration.jpg" class="d-block w-100 h-100" alt="Registration">
    <div class="text-block">
        <h2>REGISTRATION</h2>
    </div>
</div>

<h1 class="text-center">Patient Registration</h1>
<h6 class="text-left">Plese complete all required fields</h6>

<form method ="post" action="success.php" enctype="multipart/form-data" class="mb-5" style="margin:5%">
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
        <label for="gender" class="form-label">Gender</label>
        <input type="text" class="form-control" id="gender" name="gender"/>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="input-group mb-3">
        <input type="file" accept="image/*" class="form-control" name="pic">
    </div>

    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
    </div>

</form>

<?php require_once 'includes/footer.php'?>



