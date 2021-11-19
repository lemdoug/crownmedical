<?php 

    $title = 'Registration';
    require_once 'includes/header.php'
    
?>
<div class="img-container">
    <img src="images/registration.jpg" class="d-block w-100 h-100" alt="Registration">
    <div class="text-block">
        <h2>REGISTRATION</h2>
    </div>
</div>

<div>   
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
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob"/>
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select required class="form-select" name="gender" aria-label="Default select example">
            
           <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value ='<?php echo $r['gender_id'];?>'><?php echo $r ['name']; ?></option>
            <?php }?>
        </select>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Contact number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>

    <div class="input-group mb-3">
        <input type="file" accept="image/*" class="form-control" name="pic">
    </div>

    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </div>

</form>
</div>
<?php require_once 'includes/footer.php'?>



<div style = "margin:1%; background-color:lightblue; border-radius: 25px;">
    <div>

        <h1 style="font-weight:bold">Our Contact</h1>
        <h3 style="font-weight:bold">Crown Medical Complex</h3>
        <h5>Holistic Health Service · Medical Center · Family Doctor</h5>

    </div>

    <div class="sm_icon" style="margin:3%;">
    <h5 style="font-weight:bold">Address:</h5>
        <p>
            68 Old Hope Road, Kingston 5 <br/>
            Kingston, Jamaica, W.I. <br/>
            Office Lines: 876.609.3453 <br/>
            Email: crownmedical@gmail.com
        </p> 
    </div>

    <div style="margin:3%">
        <h5 style="font-weight:bold">Office Hours:</h5>
        <p>
            Monday to Friday<br/>
            10:00 am to 7:00 pm<br/>
            Saturdays<br/>
            11:00 am to 6:00 pm
        </p> 
    </div>
</div>

<?php require_once 'includes/footer.php'?>

