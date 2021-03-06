<?php require_once 'functions/config.php';?>
<?php require_once 'functions/User.php';?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ηλεκτρονικό Περιβαλλοντικό Μητρώο (ΗΠΜ)</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Add your site or application content here -->
            <div class="page-container">

               <?php include 'includes/header.php';?>

                <div class="main-wrapper">

                <?php 

                    if (!empty($_SESSION['username'])) { 

                        echo '<script>redirect("UserPanel.php",0);</script>';

                    } 


                ?>

                    <h1>Ηλεκτρονικό Περιβαλλοντικό Μητρώο (ΗΠΜ)</h1>

                    <ul class="links">

                        <li><a href="ShowPublicData.php">Εμφάνιση διαβουλεύσεων</a></li>
                        <li><a href="Login.php">Είσοδος στο σύστημα</a></li>
                        <li><a href="Register.php">Εγγραφή στο σύστημα</a></li>

                    </ul>

                </div>

            </div>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
            <script src="js/plugins.js"></script>

            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
                (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                ga('create','UA-XXXXX-X');ga('send','pageview');
            </script>
        </body>
        </html>
