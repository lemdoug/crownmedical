<?php 

    $title = 'About Us';
    require_once 'includes/header.php'
    
?>


<img src="images/aboutusfamily.jpg" class="d-block w-100 h-100" alt="About Us">

<div class="container w-100" >
 
  <div class="text-center " style="background-color:DarkSlateGrey; margin:1%">
    <h2  style="font-weight: bold; color:white; background-color:gold; ">ABOUT US | Crown Medical Complex</h2>    
    <p class="lh-lg" style="color:white;">Crown Medical Complex is a Holistic Medical Care Complex which offers unique and customized health services for the overall care of individuals and families across a wide range of demographics seeking to get the most out of life while enjoying the benefits of good health.</p>
  </div>
 
</div>

  <style>
      .blkcontainer {
        display: flex;
        align-items: center;
        justify-content: center;
       background-color:gold;
        }
      img {
        max-width: 100%
      }
      .blkimage {
        flex-basis: 120%
      }
      .blktext {
        font-size: 20px;
        padding-right: 20px;
        text-align: center;
        font-weight: bold;
        line-height: 200%;
        
      }
    </style>

    <div class="blkcontainer">
    <div class="blktext">
        <p>
          A healthy and a happy mind will result in a healthy You. Let Crown Medical Complex help you create great health now. 
          So you can live at your peak potential.
        </p>
        <p>
          We provide support, assistance and the tools needed to achieve your health goals.
        </p>
        <a class="btn btn-outline-dark" role="button" href="registration.php">
          Join Us!
        </a>
        <p>
          <br/>
          We assist families and individuals cultivate/create more wholesome, healthy and fulfilling lives; So you can "Live your full potential".
        </p>


 
      </div>
      <div class="blkimage">
        <img src="images\owner.jpg">
      </div>
      
  


<?php require_once 'includes/footer.php'?>