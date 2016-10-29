<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Liz Chuah</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Affects navbar size -->
    <link href="assets/owl.carousel/assets/css/bootstrapTheme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php
        $fileName = basename (__FILE__);
    ?>

    <?php
        include ('header.php');
    ?>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="assets/img/portfolio/Personal Branding/LC-GD-Logotype.png" alt="Liz Chuah" />
					<h1 class="invisible">Liz Chuah</h1>
					<p class="invisible">UX Researcher & Designer | Graphic Designer | Photographer | Videographer</p>
				
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
	<!-- +++++ Projects Section +++++ -->
	
	<div class="container">
        <div class="row mt">
            <div class="col-lg-6 col-lg-offset-3 centered">
                <h3>LATEST WORK</h3>
                <hr>
            </div>
        </div>
		<div class="row mt centered">
            <div class="col-lg-4">
                <a class="zoom green" href="ux.php"><img class="img-responsive" src="assets/img/portfolio/thumbnails/bcbsm-logo-sm.jpg" alt="Digital Experience Enhancement" /></a>
                <p>BCBSM<br>Digital Experience Enhancement</p>
            </div>
            <div class="col-lg-4">
                <a class="zoom green" href="ux.php"><img class="img-responsive" src="assets/img/portfolio/thumbnails/myfab5_sm.png" alt="Mobile & Web Application Design" /></a>
                <p>MYFAB5<br>Mobile & Web Application Design</p>
            </div>	
			<div class="col-lg-4">
				<a class="zoom green" href="ux.php"><img class="img-responsive" src="assets/img/portfolio/thumbnails/company_sm.png" alt="Usability Testing" /></a>
                <p>COUPA<br>Usability Testing</p>
			</div>
		</div><!-- /row -->
		<div class="row mt centered">	
			<div class="col-lg-4">
				<a class="zoom green" href="ux.php"><img class="img-responsive" src="assets/img/portfolio/thumbnails/thetasker_thumb.png" alt="Interaction Design" /></a>
                <p>THE TASKER<br>Interaction Design</p>
			</div>
			<div class="col-lg-4">
				<a class="zoom green" href="ux.php"><img class="img-responsive" src="assets/img/portfolio/thumbnails/ResponsiveDesign.png" alt="Web Design" /></a>
                <p>BLIND PIG<br>Web design</p>
			</div>
             <div class="col-lg-4">
                <a class="zoom green" href="graphic.php"><img class="img-responsive" src="assets/img/portfolio/thumbnails/Knowmadika_thumb.png" alt="Knowmadika Branding" /></a>
                <p>KNOWMADIKA<br>Graphic Design</p>
            </div>
		</div><!-- /row -->
	</div><!-- /container -->
	
<!--     <div class="col-lg-4">
                <a class="zoom green" href="graphic.php"><img class="img-responsive" src="assets/img/portfolio/thumbnails/LC-GD-Logo-thumb.png" alt="Personal Branding" /></a>
                <p>PERSONAL BRANDING<br>Graphic Design</p>
    </div> -->

	<?php
        include ('footer.php');
    ?>

	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>