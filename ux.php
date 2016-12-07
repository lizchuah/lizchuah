<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon/favicon32.png">

    <title>UX Research & Design - Liz Schemanski</title>

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


	<!-- +++++ Project +++++ -->
    <div class="container">
        <div class="row mt">
            <div class="col-lg-6 col-lg-offset-3 centered">
                <h3>UX RESEARCH & DESIGN</h3>
                <hr>
                <p>My collection of projects involving interaction design, contextual inquiry, usability testing, and web design.</p>
                <hr>
            </div>
        </div>

        <div class="container" id="project_content">
        </div><!-- /row -->

    </div><!-- /container -->

    <div class="container">
        <div class="row centered">
            <div class="span12">

                <h3>Other UX Projects</h3>
                <hr>

                <div id="owl-demo" class="owl-carousel owl-theme">
                    <figure id="ux1"><div class="item"><img src="assets/img/portfolio/thumbnails/bcbsm-logo-sm.jpg" alt ="Digital Experience Enhancement"/><p>Digital Experience Enhancement</p></div></figure>
                    <figure id="ux2"><div class="item"><img src="assets/img/portfolio/thumbnails/myfab5_sm.png" alt ="Mobile & Web Application Design"/><p>Mobile & Web Application Design</p></div></figure>
                    <figure id="ux3"><div class="item"><img src="assets/img/portfolio/thumbnails/company_sm.png" alt ="Usability Testing"/><p>Usability Testing</p></div></figure>
                    <figure id="ux4"><div class="item"><img src="assets/img/portfolio/thumbnails/thetasker_thumb.png" alt ="Interaction Design"/><p>Interaction Design</p></div></figure>
                    <figure id="ux5"><div class="item"><img src="assets/img/portfolio/thumbnails/contextual_inq_1.JPG" alt ="Contextual Inquiry"/><p>Contextual Inquiry</p></div></figure>
                    <figure id="ux6"><div class="item"><img src="assets/img/portfolio/thumbnails/ResponsiveDesign.png" alt ="Web Design"/><p>Web Design</p></div></figure>
                    <figure id="ux7"><div class="item"><img src="assets/img/portfolio/thumbnails/IR_Hymnal.png" alt ="Information Retrieval"/><p>Information Retrieval</p></div></figure>
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

        $(".container#project_content").load("ux<?php echo isset($_GET['id']) ? intval($_GET['id']) : 1?>.html").fadeIn('slow');


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
