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
    <script src="js/myScript.js"></script>
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
        <div class="c-intro-2 "><h1 class="uni-mainHeader">My Latest Projects</h1></div>
        <!-- Display of projects -->
        <div class="row">
        <?php
          // Projects array - contains all project display information
          $projects = array();

          // Give array values
          $projects[] = array("name" => "Overhaul.design", "description" => "Develop & maintan websites for our web agency business.", 
                              "link" => "", "logo" => "far fa-question-circle fa-4x", "css_id" => "1");
          $projects[] = array("name" => "Study Buddy", "description" => "A flash card type application for studying.", 
                              "link" => "", "logo" => "far fa-question-circle fa-4x", "css_id" => "2");
                              
          // Loop until end of array
          for ($x = 0; $x < count($projects); $x++) {          
        ?>
        <!-- Projects -->
          <div class="col-sm-9 project-box" id="p-padding">
            <h2 id="p-header-<?php echo $projects[$x]["css_id"]; ?>"><?php echo $projects[$x]["name"]; ?></h2>
            <p><?php echo $projects[$x]["description"]; ?></p>
            <!-- Showcase -->
            <div class="col-lg-12 p-outbox">
              <div id="p-box">
                <!-- Overlay 1 (Shows by default) -->
                <div class="p-overlay">
                  <div class="p-text">
                    <i class="<?php echo $projects[$x]["logo"]; ?>"></i>
                  </div>
                </div>
                <!-- Overlay 2 (Shows on hover) -->
                <div class="p-overlay-2" id="p-overlay-2-btn-<?php echo $projects[$x]["css_id"]; ?>">
                  <div class="p-text">
                    <a> <button type="button">View info</button></a>
                    <!-- Disabled link -->
                    <!-- href="<?php // echo $projects[$x]["link"]; ?>" target="_blank" -->
                  </div>
                </div>
              </div>
            </div>  
          </div> <!--end of Project #1 -->
          <?php } // end of for loop ?>  
        </div> <!-- end of row -->
    </div>

    <!-- Footer -->
    <?php include("footer.php"); ?>

  </div> <!-- end of page wrapper-->
</body>
</html>