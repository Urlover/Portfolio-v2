<!-- Navigation bar -->
<nav class="navbar navbar-expand-sm navbar-light slide-in-blurred-top">
  <!-- Logo -->
  <a class="navbar-brand rotate-center" href="index"><img src="/images/J_logo.png" width="40" height="40"></a>
  <!-- Hamburger icon (collapse) -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links on the left -->
  <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php
        // All links that are have no underline (Not Active)
          $linksNonActive = array(
            '<li class="nav-item active pr-4"><a href="/index">About</a></li>',
            '<li class="nav-item pr-4"><a href="/projects">Projects</a></li>',
            '<li class="nav-item pr-4"><a href="/post">Posts</a></li>',
            '<li class="nav-item pr-4"><a href="/contact">Contact</a></li>'
          );
        // All links that have an underline (Active)
          $linksActive = array(
            '<li class="nav-item active pr-4"><a id="navbar-curr" href="/index">About</a></li>',
            '<li class="nav-item pr-4"><a id="navbar-curr" href="/projects">Projects</a></li>',
            '<li class="nav-item pr-4"><a id="navbar-curr" href="/post">Posts</a></li>',
            '<li class="nav-item pr-4"><a id="navbar-curr" href="/contact">Contact</a></li>'
          );

        // Set underline of nav bar item to current page
        if (stripos($_SERVER['SCRIPT_NAME'], 'index.php')) {
          echo $linksActive[0]; echo $linksNonActive[1]; echo $linksNonActive[2];echo $linksNonActive[3];
        } else if (stripos($_SERVER['SCRIPT_NAME'], 'projects.php')) {
          echo $linksNonActive[0]; echo $linksActive[1]; echo $linksNonActive[2]; echo $linksNonActive[3];
        } else if (stripos($_SERVER['SCRIPT_NAME'], 'post.php')) {
          echo $linksNonActive[0]; echo $linksNonActive[1]; echo $linksActive[2]; echo $linksNonActive[3];
        } else if (stripos($_SERVER['SCRIPT_NAME'], 'contact.php')) {
          echo $linksNonActive[0]; echo $linksNonActive[1]; echo $linksNonActive[2]; echo $linksActive[3];
        } else {
          echo $linksNonActive[0]; echo $linksNonActive[1]; echo $linksNonActive[2]; echo $linksNonActive[3];
        }
        ?>
      </ul>
      <!-- Links & buttons on the right -->  
      <a href="files/Jonah-Resume.pdf" target="_blank"><button type="button" id="navbar-resume-btn">Resume</button> </a>
    </div>
</nav>  
