<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Thank You - Liz Chuah</title>

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
        $fileName=basename (__FILE__);
        include ('header.php');
    ?>

<div id="white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <?php
                    $filename = "SaveInfo.csv";
                    $isItExisting = (file_exists($filename));

                    $handle = fopen($filename, 'a');
                    $msg = "Thank you for your message, " . $_POST['name'] . "\n";
                    $stringToAdd="";
                    echo "<h1>Thank you! I will contact you soon!</h1>";

                    if (!$isItExisting){
                        foreach($_POST as $name => $value) {
                            $stringToAdd.="$name,";
                        }
                        $stringToAdd.="\n";
                        fwrite($handle, $stringToAdd);
                    }

                    $stringToAdd="";
                    
                    foreach($_POST as $name => $value) {
                        print "$name : $value<br/>";
                        $msg .="$name : $value\n";
                        $stringToAdd.="$value,";
                    }
                    $stringToAdd.="\n";

                    fwrite($handle, $stringToAdd);

                    fclose($handle);
                    $to = "lizchuah@umich.edu";
                    $from = $_POST['email'];
                    $headers = "From: " . $from;
                    $headers2 = "From: Liz Chuah <lizchuah@umich.edu>\r\n";
                    $subject = "Message from " . $from;
                    

                    mail($to, $subject, $msg, $headers);
                    mail($from, 'Thank you for your message', $msg, $headers2);
                ?>
            </div>
        </div>
    </div>
</div>

    <?php
        include('footer.php');
    ?>

</body>
</html>