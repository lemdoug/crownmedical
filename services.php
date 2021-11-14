<?php 

    $title = 'Services';
    require_once 'includes/header.php'
    
?>

<style>
.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: scale-down;
}
</style>


<div>
    <img src="images/services.jpg" class="d-block w-100 h-100" alt="Services">
    <div class="text-center " style="background-color:DarkSlateGrey; margin:1%">
        <h2  style="font-weight: bold; color:white; background-color:gold; ">OUR SERVICES</h2>    
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="images/maternity.png" class="card-img-top" alt="Maternity care">
      <div class="card-body text-center">
        <h5 class="card-title">MATERNITY CARE</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/childcare.jpg" class="card-img-top" alt="Child Care">
      <div class="card-body">
        <h5 class="card-title text-center">CHILD HEALTH</h5>
        <p class="card-text text-center">We provide care for kids of all ages. We also provide vaccinations for all age groups</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/dressing.png" class="card-img-top" alt="Dressing">
      <div class="card-body text-center">
        <h5 class="card-title">DRESSING</h5>
        <p class="card-text text-center">We offer the best in wound care. We treat skin ulcers, cuts, diabetic wounds, traumatic wounds, burns, lacerations, surgical wounds and incisions.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/cancerscreening.png" class="card-img-top" alt="Cancer Screening">
      <div class="card-body text-center">
        <h5 class="card-title">CANCER SCREENING</h5>
        <p class="card-text text-center">Cancer is best treated when caught early, with that in mind we perform and/or recommend the appropriate tests to be done based on your age and other risk factors.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/stitesting.png" class="card-img-top" alt="STI Testing">
      <div class="card-body text-center">
        <h5 class="card-title">STI TESTING</h5>
        <p class="card-text text-center">We encourage persons to get to know their status as well as their partner’s status. As such we welcome couples visit, counselling and testing.</p>
      </div>
    </div>
  </div>
</div>

<?php require_once 'includes/footer.php'?>