<?php 

    $title = 'Home';
    //includes standard header on each customer facing page - to maintain consistency
    require_once 'includes/header.php'
    
?>
<!-- Carousel with images and information that run across the top of the page -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="images\childheath.jpg" class="d-block w-100 h-100" alt="Child Health">
      <div style="background-color:DodgerBlue; opacity:0.85; border-radius: 25px;" class="carousel-caption d-none d-md-block">
        <h2>Child Care</h2>
        <p>Child care at Crown Medical promotes the health of children and adolescents with a balanced program that provides patient education and delivers high quality comprehensive clinical care and service.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="images\healthcoaching.jpg" class="d-block w-100 h-100" alt="Health Coaching">
      <div style="background-color:DodgerBlue; opacity:0.85; border-radius: 25px;" class="carousel-caption d-none d-md-block">
        <h2>Health Coaching</h2>
        <p>Our Health Coaches are behaviour change specialists who know how to partner with patients to identify health goals that put them on the road to confident self-management of their chronic condition(s).</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="images\seniorhealth.jpg" class="d-block w-100 h-100" alt="Senior Health">
      <div style="background-color:DodgerBlue;opacity:0.85; border-radius: 25px;" class="carousel-caption d-none d-md-block">
        <h2>Senior Care</h2>
        <p>When it comes to the care of ageing adults, we at Crown Medical believe in a whole-person and passionate approach to healthy ageing. Our physicians, nurses and other staff members are devoted to treating our patients with respect and compassion.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="card text-center" >
 
  <div class="card-body" style="background-color:gold;">
    <h2 class="card-title" style="font-weight: bold">WELCOME TO CROWN MEDICAL</h2>
    <p class="card-text" style="font-style: italic; font-weight: bold;">Health Care for Royalty!</p>
    <!-- Email button that when clicked brings up default email client with Crown Medical's email address in 'to' field-->
    <a class="btn btn-outline-dark" role="button" href="mailto:crownmedical@gmail.com">Email us at: crownmedical@gmail.com</a>
  </div>
</div>

 <!-- includes standard footer on each customer facing page - to maintain consistency -->
<?php require_once 'includes/footer.php'?>