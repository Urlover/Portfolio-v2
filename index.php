<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/J_logo2.png"/>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
          Through the past years, I have been taught many things that have propelled me to write
          efficient code in order to create or problem solve. With consistency and persistence, I always
          continue to learn more about this beautiful world of code.
        </p>
      </div>
      <!-- My interest -->  
      <div class="container-sm" id="c-interest" data-aos="zoom-in" data-aos-duration="2000" class="aos-init">
        <h4 >My interest</h4>
        <!-- Boxes -->
        <div class="row" id="i-boxes">
          <?php
          // Create array that will hold my interest
          $myInterest = array();

          // Assign my interest to the new array
          $myInterest[] = array("name" => "Gaming", "description" => "", "animation" => "right");
          $myInterest[] = array("name" => "Programming", "description" => "", "animation" => "left");
          $myInterest[] = array("name" => "Coffee", "description" => "", "animation" => "right");
          $myInterest[] = array("name" => "Spirituality", "description" => "", "animation" => "left");

          // Loop until end of array
          for ($x = 0; $x < count($myInterest); $x++) {
            // Display rest of images + text 
          ?>  
          <div class="col-lg-6 box" id="i-outbox" data-aos="fade-<?php echo $myInterest[$x]["animation"]; ?>" data-aos-duration="2000">
            <div id="i-box">
              <img src="images/pic_<?php echo $x+1; ?>.jpg" width="100%" height="100%">
              <a id="interest-open"><div class="i-overlay">
                  <div class="i-text">
                    <?php echo $myInterest[$x]["name"]; ?>
                  </div>
              </div></a>
            </div>  <!-- end of i-box -->
        </div>      <!-- end of row -->
        <?php } ?>  <!-- close For Loop -->
      </div>        <!-- end of my interest -->
    </div>          <!-- end of content area -->

    <!-- Footer -->
    <?php include("footer.php"); ?>
  </div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script> AOS.init(); </script>
</body>
</html>