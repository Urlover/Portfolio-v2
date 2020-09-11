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
      <div class="c-intro">
        <h1 data-aos="fade-up" data-aos-duration="2000">Hi, I'm <span id="cHeader1-font1">Jonah.</span></h1>
        <h2 data-aos="fade-up" data-aos-duration="2500"><span id="cHeader2-font1">I love to create </span>websites & applications.</h2>
      </div>
      <!-- A little about me -->
      <div class="c-aboutMe">
        <h4 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">A little about me</h4>
        <p data-aos="fade-up" data-aos-duration="2500" data-aos-delay="500">I'm currently a Computer Science student attending my third year at Algonquin College. 
          Through the past years, I have been taught many things that have propelled me to write
          efficient code in order to create or problem solve. With consistency and persistence, I always
          continue to learn more about this beautiful world of code.
        </p>
      </div>
      <!-- My Interest -->
      <div class="container-sm" id="c-interest">
        <h4 data-aos="zoom-in" data-aos-duration="2000">My interest</h4>
        <!-- Boxes -->
        <div class="row" id="i-boxes">
          <!-- Box #1 -->
          <div class="col-lg-6" id="i-outbox" data-aos="fade-right" data-aos-duration="2000">
            <div id="i-box">
              <img src="images/test_pic1.jpg" width="100%" height="100%">
              <div class="i-overlay">
                <div class="i-text">Gaming</div>
              </div>
            </div>
          </div>
          <!-- Box #2 -->
          <div class="col-lg-6" id="i-outbox" data-aos="fade-left" data-aos-duration="2000">
            <div id="i-box">
              <img src="images/test_pic2.jpg" width="100%" height="100%">
              <div class="i-overlay">
                <div class="i-text">Programming</div>
              </div>
            </div>
          </div>
          <!-- Box #3 -->
          <div class="col-lg-6" id="i-outbox" data-aos="fade-right" data-aos-duration="2000">
            <div id="i-box">
              <img src="images/test_pic3.jpg" width="100%" height="100%">
              <div class="i-overlay">
                <div class="i-text">Coffee</div>
              </div>
            </div>
          </div>
          <!-- Box #4 -->
          <div class="col-lg-6" id="i-outbox" data-aos="fade-left" data-aos-duration="2000">
            <div id="i-box">
              <img src="images/test_pic4.jpg" width="100%" height="100%">
              <div class="i-overlay">
                <div class="i-text">Nature</div>
              </div>
            </div>
          </div>

          </div>
        </div> <!-- end of i-boxes-->
      </div> <!-- end of c-interest -->
    </div> <!-- end of Content Area -->

    <!-- Footer -->
    <?php include("footer.php"); ?>

 </div> <!-- end of page wrapper-->
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script> AOS.init(); </script>
</body>
</html>