<!-- Navigation bar -->
<nav class="navbar navbar-expand-sm navbar-light">
  <!-- Logo -->
  <a class="navbar-brand" href="index.html"><img src="images/J_logo.png" width="40" height="40"></a>
  <!-- Hamburger icon (collapse) -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links on the left -->
  <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php
        // Set underline of nav bar item to current page
        if (stripos($_SERVER['REQUEST_URI'], 'index.php')) {
          echo '<li class="nav-item active pr-4"><a id="navbar-curr" href="index.php">About Me</a></li>';
          echo '<li class="nav-item pr-4"><a href="projects.php">Projects</a></li> ';
        } else {
          echo '<li class="nav-item active pr-4"><a href="index.php">About Me</a></li>';
          echo '<li class="nav-item pr-4"><a id="navbar-curr" href="projects.php">Projects</a></li> ';
        } 
        ?>
      </ul>
      <!-- Links & buttons on the right -->  
      <a href="files/Jonah-Resume.pdf" target="_blank"><button type="button" id="navbar-resume-btn">Resume</button> </a>
    </div>
</nav>  
