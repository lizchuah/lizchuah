<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>About - Liz Chuah</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Affects navbar size & position -->
    <link href="assets/owl.carousel/assets/css/bootstrapTheme.css" rel="stylesheet">
    <link href="assets/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">

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

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="assets/img/about_profile-e-sq.png" alt="Liz Chuah">
					<h1>About Liz</h1>
					<p>I am a User Experience Designer based in Detroit, MI. I graduated in 2016 with a Master of Science degree in Information (MSI) specializing in Human-Computer Interaction (HCI) from the University of Michigan School of Information (UMSI).</p>
                    <p>I have experience working in both the user-centered design process and Agile. I always strive to work productively through effective written and verbal communication with external clients and colleagues.  I am committed to enhance user experience, increase process efficiency, and improve system ease-of-use.
                        Some of my skills include user experience research and design, graphic/visual design, photography, and videography.</p>
                    <p>I currently reside in Ann Arbor, MI where I enjoy the four beautiful seasons of the Midwest.</p>
                    <p>If you have any questions about my work and qualifications (or even if you just want to drop a message and say hello), you are most welcome to email me at <a href='lizchuah@umich.edu'>lizchuah@umich.edu</a> or send a message through the contact form below.</p>
				
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
	<!-- +++++ Information Section +++++ -->
	
	<div class="container pt">
		<div class="row centered">
            <h3>SKILLS</h3>
                <hr><br>
			<div class="col-lg-4">
				<span class="glyphicon glyphicon-user"></span>
				<p>Enhance<br>User Experience</p>
			</div>
			
			<div class="col-lg-4">
				<span class="glyphicon glyphicon-flash"></span>
				<p>Increase<br>Process Efficiency</p>
			</div>

			<div class="col-lg-4">
				<span class="glyphicon glyphicon-hand-up"></span>
				<p>Improve<br>System Ease-of-use</p>
			</div>
		</div><!-- /row -->
		
		<div class="row mt">
			<div class="col-lg-6">
				<h4>GRAPHIC & VIDEO</h4>
                Photoshop
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        <span class="sr-only">90% Complete</span>
                    </div>
                </div>

                Illustrator
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        <span class="sr-only">90% Complete</span>
                    </div>
                </div>
                
                Final Cut Pro X
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                        <span class="sr-only">95% Complete</span>
                    </div>
                </div>
			</div><!-- /colg-lg-6 -->
			
			<div class="col-lg-6">
				<h4>WEB DESIGN</h4>
				HTML + CSS
                <div class="progress">
                    <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        <span class="sr-only">85% Complete</span>
                    </div>
                </div>

				Bootstrap
				<div class="progress">
					<div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
						<span class="sr-only">70% Complete</span>
					</div>
				</div>
				
				Javascript + PHP
				<div class="progress">
					<div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
						<span class="sr-only">65% Complete</span>
					</div>
				</div>
			</div><!-- /col-lg-6 -->
		</div><!-- /row -->

                <div class="row mt">
            <div class="col-lg-6 col-lg-offset-3 centered">
                <h3>CONTACT ME</h3>
                <hr>
                <p>Shoot me a message and I will get back to you within 24 hours.</p>
            </div>
        </div>
        <div class="row mt">    
            <div class="col-lg-8 col-lg-offset-2">
                <form role="form" action="thankyou.php" method="POST" onSubmit="return confirmEmail()">
                <fieldset>
                <legend class="invisible">Send me a message:</legend>
                  <div class="form-group">
                    <label for="name" class="invisible">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name*" required>
                    <br>
                  </div>
                  <div class="form-group">
                    <label for="email" class="invisible">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email*" required>
                    <br>
                  </div>
                  <div class="form-group">
                    <label for="confirmEm" class="invisible">ConfirmEmail</label>
                    <input type="email" class="form-control" id="confirmEm" name="confirmEm" placeholder="Confirm Email*" required>
                    <br>
                  </div>
                  <label for="message" class="invisible">Message</label>
                  <textarea class="form-control" rows="6" id="message" name="message" placeholder="Enter your message here*" required></textarea>
                    <br>
                  <button type="submit" class="btn btn-success">SEND</button>
                </form>             
            </div>
        </div><!-- /row -->
	</div><!-- /container -->
	

    <!-- +++++ Contact Section +++++ -->

	
    <?php
        include ('footer.php');
    ?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script type = "text/javascript">
        function confirmEmail(){
            var email = document.getElementById("email").value;
            var confirmEm = document.getElementById("confirmEm").value;
            if (email != confirmEm) {
                alert ('Email addresses do not match!');
                return false;
            }
            else {
              return true;
            }
          }
    </script>

  </body>
</html>
