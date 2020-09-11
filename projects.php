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
    <title>Jonah Louis | Projects</title>
</head>
<body>
  <div class="page-wrapper">
    <!-- Navigation bar -->
    <?php include("nav.php"); ?>
    <!-- Social icon bar (Static left side) -->
    <?php include("social.php"); ?>

  <!-- Projects content -->
    <div class="container-sm" id="projects-content">
        <div class="c-intro-2 "><h1 data-aos="fade-up" data-aos-duration="2000">My Latest Projects</h1></div>
        <!-- Display of projects -->
        <div class="row">
        <!-- Project #1 -->
          <div class="col-sm-9 project-box" id="p-padding">
            <h2>Overhaul.design</h2>
            <p>Text here</p>
            <!-- Showcase -->
            <div class="col-lg-12" id="p-outbox" data-aos="fade-right" data-aos-duration="2000">
              <div id="p-box">
                <!-- Overlay 1 (Shows by default) -->
                <div class="p-overlay">
                  <div class="p-text">
                    <i class="fab fa-wordpress-simple fa-4x"></i>
                  </div>
                </div>
                <!-- Overlay 2 (Shows on hover) -->
                <div class="p-overlay-2">
                  <div class="p-text">
                    <button>View Project</button>
                  </div>
                </div>
              </div>
            </div>  
          </div> <!--end of Project #1 -->
        </div> <!-- end of row -->
    </div>

    <!-- Footer -->
    <?php include("footer.php"); ?>

  </div> <!-- end of page wrapper-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script> AOS.init(); </script>
</body>
</html>