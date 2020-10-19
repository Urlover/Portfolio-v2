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
      <div class="c-welcome">
          <h1 id="cHeader1-font1">Hi, I'm <span id="cHeader1-font2">Jonah.</span></h1>
          <h2 id="cHeader2-font1"><span id="cHeader2-font2">I love to create </span>websites & applications.</h2>
          <div class="cBtns">
            <a href="contact.php"><button type="button" class="cBtn">Start a Project</button></a>
            <a href="blog.php"><button type="button" class="cBtn">My Current Plans</button></a>  
          </div>
        </div>

      <!-- About me -->
      <div class="c-aboutMe">
        <div id="c-text-box">
          <h4 class="uni-subHeader">A little introduction</h4>
          <!-- TODO: Talk about what I want to do and where im heading -->
          <p class="c-text">
            I'm currently completing my last year as a Computer Science Student at Algonquin College.
            Focusing on learning more about Web development and Software development using modern
            & popular technologies with the intention of creating beautiful things.
          </p>
        </div>
      </div>

      <!-- My Skills/What I do --> 
      <div class="c-skill">
        <div class="skill1" id="c-text-box">
            <h1 class="uni-subHeader">I build things for the web</h1>
            <p class="c-text">
              The abundance of the web is what strives me discover more about it. While keeping the 
              objective of creating valuable pixel perfect websites & web applications, I aim to expand my web fundamentals
              knowledge towards every part of the web.
              <br /><br />
              Web technologies I work with:
            </p>
            <div class="row">
              <div class="col-4 skill-lang">
                <p>
                  <i class="fas fa-circle-notch"></i> HTML <br />
                  <i class="fas fa-circle-notch"></i> CSS <br />
                  <i class="fas fa-circle-notch"></i> JS <br />
                  <i class="fas fa-circle-notch"></i> PHP <br />
                  <i class="fas fa-circle-notch"></i> SQL <br />
                </p>
              </div>
              <div class="col-8 skill-framew">
                <p>
                  <i class="far fa-circle"></i> Boostrap <br />
                  <i class="far fa-circle"></i> WordPress <br />
                  <i class="far fa-circle"></i> Divi <br />
                </p>
              </div>
            </div>
        </div>
      </div> 
      <div class="c-skill" id="c-skill-2">
        <div class="skill2" id="c-text-box">
            <h1 class="uni-subHeader">I make software & problem solve</h1>
            <p class="c-text">
              Wether the task is to code software from scratch, fix an existing issue, or add a feature,
              I love to do it as efficiently and as clean as I can.   
              <br /><br />
              Software technologies I work with:
            </p>
            <div class="row">
              <div class="col-4 skill-lang">
                <p>
                  <i class="fas fa-circle-notch"></i> Java <br />
                  <i class="fas fa-circle-notch"></i> C <br />
                  <i class="fas fa-circle-notch"></i> C++ <br />
                  <i class="fas fa-circle-notch"></i> Arduino <br />
                </p>
              </div>
              <div class="col-6 skill-framew">
                <p>
                  <i class="far fa-circle"></i> Java Swing <br />
                  <i class="far fa-circle"></i> JavaFX <br />
                </p>
              </div>
            </div>
        </div>
      </div>     

    <!-- Footer -->
    <?php include("footer.php"); ?>
  </div>
</body>
</html>