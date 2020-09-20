<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/J_logo2.png"/>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- End of boostrap -->
    <script src="https://kit.fontawesome.com/b510426974.js" crossorigin="anonymous"></script>
    <title>Jonah Louis</title>
</head>
<body>
  <div class="page-wrapper">
    <!-- Navigation bar -->
    <?php include("nav.php"); ?>
    <!-- Social icon bar (Static left side) -->
    <?php include("social.php"); ?>

    <!-- Content Area -->
    <div class="container-sm" id="content">
      <!-- Introduction -->
      <div class="c-intro">
          <h1 class="slide-in-bottom">Hi, I'm <span id="cHeader1-font1">Jonah.</span></h1>
          <h2 class="slide-in-bottom-2"><span id="cHeader2-font1">I love to create </span>websites & applications.</h2>
        </div>
      <!-- About me -->
      <div class="c-aboutMe">
        <h4 class="slide-in-bottom-d">A little about me</h4>
        <p class="slide-in-bottom-d2">I'm currently a Computer Science student attending my third year at Algonquin College. 
          Throughout the past years, I have been taught many things that have propelled me to write
          efficient code in order to create or problem solve. With consistency and persistence, I always
          continue to learn more about this beautiful world of code.
        </p>
      </div>
      <!-- My interest -->  
      <div class="container-sm" id="c-interest" data-aos="zoom-in" data-aos-duration="2000" class="aos-init">
        <h4 >My interests</h4>
        <!-- Boxes -->
        <div class="row" id="i-boxes">
          <?php
          // Create array that will hold all my interests
          $myInterest = array();

          // Assign my interests to the new array
          $myInterest[] = array("name" => "Gaming", "description" => "", "animation" => "right");
          $myInterest[] = array("name" => "Programming", "description" => "", "animation" => "left");
          $myInterest[] = array("name" => "Coffee", "description" => "", "animation" => "right");
          $myInterest[] = array("name" => "Spirituality", "description" => "", "animation" => "left");

          // Loop until end of array
          for ($x = 0; $x < count($myInterest); $x++) {
            /*
            * In the for loop:
            *  > It will assign the proper animation to the div
            *  > Assign the appropriate name & picture to display
            *  > Assign a unique Modal ID. I.e myModal-1,myModal-2...etc 
            */
          ?>  
          <div class="col-lg-6 box" id="i-outbox" data-aos="fade-<?php echo $myInterest[$x]["animation"]; ?>" data-aos-duration="2000">
            <div id="i-box">
              <img src="images/pic_<?php echo $x+1; ?>.jpg" width="100%" height="100%">
              <a id="interest-open" data-toggle="modal" data-target="#myModal<?php echo "-$x";?>"><div class="i-overlay">
                  <div class="i-text">
                    <?php echo $myInterest[$x]["name"]; ?>
                  </div>
              </div></a>
            </div>  <!-- end of i-box -->
        </div>      <!-- end of row -->
        <?php } ?>  <!-- close 'For Loop' -->
      </div>        <!-- end of my interest -->
    </div>          <!-- end of content area -->

    <!-- Modal #1 -->
    <div class="modal fade" id="myModal-0" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
      <div class="container-fluid">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Gaming</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                My beautiful computer setup that was built from scratch and with love by me.
              </p>
              <!-- Row #1 -->
              <div class="row">
                <div class="col-1"><i class="fas fa-dot-circle fa-lg"></i></div>
                <div class="col-11"><h6>Specifications</h6></div>
              </div>  
              <div class="row">
                <div class="col-1 m-col-1"><!-- Empty div --></div>
                <div class="col-11 m-col-2">
                  <p>
                    CPU - AMD Ryzen 5 2600<br>CPU Cooler - Thermaltake AIO Water 3.0 240 ARGB<br>GPU - ASUS GTX 1650 Super<br>
                    Motherboard - Astrock B450M-HDV R4.0<br>RAM - Corsair Vegeance LPX 16GB 3200MHz DDR4<br>
                    SSD 1 (OS) - WD Black SN750 250GB NVMe M.2 2280<br>SSD 2 - Samsung 860 EVO 1TB<br>
                    Case + PSU - Thermaltake H17<br>Fans - Thermaltake Pure Plus 12 RGB 120mm (x2)<br>
                  </p>
                </div>
              </div>   
              <!-- Row #2 -->      
              <div class="row">
                <div class="col-1"><i class="fas fa-dot-circle fa-lg"></i></div>
                <div class="col-11"><h6>Favorite game</h6></div>
              </div>     
              <div class="row">
                <div class="col-1"><!-- Empty div --></div>
                <div class="col-11"><p>Counter-Strike Global Offensive</p></div>
              </div>  
            </div>
            <div class="modal-footer">
              <button type="button" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include("footer.php"); ?>
  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script> AOS.init(); </script>
</body>
</html>