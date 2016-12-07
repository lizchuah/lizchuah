<!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="assets/img/LS_logo_sm.png" alt="Liz Schemanski" />Liz Schemanski</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
                <!-- <li class="dropdown">
                <a href="work.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                // <?php
                //   if ($fileName == "work.php"){
                //   echo "class = \"current\"";
                // }
                ?>>Work<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="ux.php">UX Research & Design</a></li>
                  <li><a href="graphic.php">Graphic Design</a></li>
                  <li><a href="photo.php">Photography</a></li>
                  <li><a href="video.php">Videography</a></li>
                </ul>
              </li> -->
            <li><a href="ux.php"
              <?php
                if ($fileName == "ux.php"){
                  echo "class = \"current\"";
                }
                ?>
            >UX Research & Design</a></li>
            <li><a href="graphic.php"
              <?php
                if ($fileName == "graphic.php"){
                  echo "class = \"current\"";
                }
                ?>
            >Graphic Design</a></li>
            <li><a href="photo.php"
              <?php
                if ($fileName == "photo.php"){
                  echo "class = \"current\"";
                }
                ?>
            >Photography</a></li>
            <li><a href="video.php"
              <?php
                if ($fileName == "video.php"){
                  echo "class = \"current\"";
                }
                ?>
            >Videography</a></li>
            <li><a href="about.php"
              <?php
                if ($fileName == "about.php"){
                  echo "class = \"current\"";
                }
                ?>
            >About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>