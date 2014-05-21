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
                <h2>Ηλεκτρονικό Περιβαλλοντικό Μητρώο - Ανοιχτή Διαβούλευση (ΗΠΜ)</h2>

                <table style="width: 100%;" class="public-data">

                    <tr style="border-bottom: 1px solid #aaa;">
                        <th>Α/Α Αίτησης</th>
                        <th>Ονοματεπώνυμο</th>
                        <th>Ημερομηνία Υποβολής</th>
                        <th>Αρμόδια Περιβαλλοντική Αρχή</th>
                        <th>Λεπτομέρειες Αίτησης</th>
                    </tr>

                    <?php

                    $sql = "SELECT applications.id,applications.submission_date,accounts.name,accounts.surname,apa.apa_name FROM applications, accounts, form_t, apa WHERE applications.account_id = accounts.id AND applications.id = form_t.application_id AND apa.id = form_t.apa_id;";

                    if($result = $db->query($sql)) {

                        while($row = $result->fetch_assoc()) {

                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['name'] . " " . $row['surname'] . '</td>';
                            echo '<td>' . $row['submission_date'] . '</td>';
                            echo '<td>' . $row['apa_name'] . '</td>';
                            echo '<td><a href="ShowApplication.php?id=' . $row['id'] . '">Δείτε λεπτομέρειες</a></td>';
                            echo '</tr>';

                        }

                    }


                    ?>

                </table>

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
