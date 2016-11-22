<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Graphic Design - Liz Chuah</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="assets/owl.carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
    <link href="assets/owl.carousel/assets/css/custom.css" rel="stylesheet">
    <link href="assets/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

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

	<!-- +++++ Projects Section +++++ -->

	<div class="container">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>GRAPHIC DESIGN</h3>
                <hr>
                <p>My collection of various graphic design projects made with Photoshop & Illustrator.</p>
                <hr>
            </div>
		</div>

		<div class="container" id="project_content">
        </div><!-- /row -->

    </div><!-- /container -->

    <div class="container">
        <div class="row centered">
            <div class="span12">

                <h3>Other Graphic Design Projects</h3>
                <hr>

                <div id="owl-demo" class="owl-carousel owl-theme">
                    <figure id="graphic1"><div class="item"><img src="assets/img/portfolio/thumbnails/LC-GD-Logo-thumb.png" alt ="Personal Branding"/><p>Personal Branding</p></div></figure>
                    <figure id="graphic2"><div class="item"><img src="assets/img/portfolio/thumbnails/Knowmadika_thumb.png" alt ="Knowmadika Branding"/><p>Knowmadika Branding</p></div></figure>
                    <figure id="graphic3"><div class="item"><img src="assets/img/portfolio/thumbnails/CS_Bookmarks_new.png" alt ="Christian Students Marketing Collateral"/><p>Christian Students Marketing</p></div></figure>
                    <figure id="graphic4"><div class="item"><img src="assets/img/portfolio/thumbnails/Twitter_bg_port.png" alt ="Twitter Backgrounds"/><p>Twitter Backgrounds</p></div></figure>
                    <figure id="graphic5"><div class="item"><img src="assets/img/portfolio/thumbnails/sliders_thumb.png" alt ="UMSI Sliders"/><p>UMSI Sliders</p></div></figure>
                    <figure id="graphic6"><div class="item"><img src="assets/img/portfolio/thumbnails/infographic_thumb.png" alt ="ULead Infographic"/><p>ULead Infographic</p></div></figure>
                    <figure id="graphic7"><div class="item"><img src="assets/img/portfolio/thumbnails/alphabet_poster_thumb.png" alt ="Awareness Ribbon Poster"/><p>Awareness Ribbon Poster</p></div></figure>
                </div>
                <br>

            </div>
        </div>
    </div>




    <?php
        include ('footer.php');
    ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {

        $(".container#project_content").load("graphic<?php echo isset($_GET['id']) ? intval($_GET['id']) : 1?>.html").fadeIn('slow');


        $("#owl-demo").owlCarousel({
            items : 4,
            lazyLoad : false,
            navigation : true
            });

    });

    $("figure").click(function(){
        filename = this.id+".html"
        $(".container#project_content").fadeOut("slow").load(filename).fadeIn('slow');
    });
    </script>

    <script src="assets/owl.carousel/owl-carousel/owl.carousel.js"></script>
    <script src="assets/owl.carousel/assets/js/bootstrap-collapse.js"></script>
    <script src="assets/owl.carousel/assets/js/bootstrap-transition.js"></script>
    <script src="assets/owl.carousel/assets/js/bootstrap-tab.js"></script>
    <script src="assets/owl.carousel/assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/owl.carousel/assets/js/application.js"></script>

  </body>
</html>
