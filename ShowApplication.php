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
  <meta http-Equiv="Cache-Control" Content="no-cache">
  <meta http-Equiv="Pragma" Content="no-cache">
  <meta http-Equiv="Expires" Content="0">
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

              if (isset($_GET['id']) && !empty($_GET['id'])) {

               $appId = intval($_GET['id']);

             } else {

               echo '<script>redirect("index.php",0);</script>';

             }


             ?>

             <h2>Αίτηση (Α/Α : <?php echo $appId;?> )</h2>

             <hr>

             <table style="width: 100%; font-size: 11px;" class="public-data">

               <tr>
                <th>Αρμόδια Περιβαλλοντική Αρχή</th>
                <th>Αριθμός Πρωτοκόλλου</th>
                <th>Τίτλος Έργου</th>
                <th>Επωνυμία Φορέα</th>
                <th>Επωνυμία Μελετητή</th>
                <th>Περιφέρεια</th>
                <th>Ενότητα</th>
                <th>Δήμος</th>
              </tr>

              <?php

              $sql = "SELECT DISTINCT apa.apa_name,form_t.yphresia_ar_protok,form_t.xrhsths_titlos_ergou,form_t.foreas_epwnumia,
              form_t.meletitis_epwnumia,form_t.dimos, perifereies.perifereia_onoma, perifereiakes_enotites.enotita_name FROM 
              apa, applications, form_t, perifereiakes_enotites,perifereies WHERE applications.id = '" . $appId . "' AND 
              form_t.perifereia_id = perifereies.id AND form_t.perifereiaki_enotita_id = perifereiakes_enotites.id;";

              if ($result = $db->query($sql)) {

                while($row = $result->fetch_assoc()) {

                 echo '<tr>';
                 echo '<td>' .$row['apa_name'] . '</td>';
                 echo '<td>' .$row['yphresia_ar_protok'] . '</td>';
                 echo '<td>' .$row['xrhsths_titlos_ergou'] . '</td>';
                 echo '<td>' .$row['foreas_epwnumia'] . '</td>';
                 echo '<td>' .$row['meletitis_epwnumia'] . '</td>';
                 echo '<td>' .$row['perifereia_onoma'] . '</td>';
                 echo '<td>' .$row['enotita_name'] . '</td>';
                 echo '<td>' .$row['dimos'] . '</td>';
                 echo '</tr>';

                 break;

               }

             }


             ?>

           </table>

           <?php 

           if ($result->num_rows == 0) { 

            echo '<tr class="error"><td colspan="8">Η συγκεκριμένη αίτηση δεν υπάρχει!</td></tr>';

          }  else {

            $sql = "SELECT egsa87_1,egsa87_2,egsa87_3 FROM form_t WHERE `application_id`='" . $appId . "'";

            $x1y1 = ",";
            $x2y2 = ",";
            $x3y3 = ",";

            if ($result = $db->query($sql)) {

             while($row = $result->fetch_assoc()) { 
              $x1y1 = $row["egsa87_1"];
              $x2y2 = $row["egsa87_2"];
              $x3y3 = $row["egsa87_3"];
              break;
            }

            //echo $x1y1 . '</br>';
            $x1 = explode(",",$x1y1)[0];
            $y1 = explode(",",$x1y1)[1];

            //echo $x2y2 . '</br>';
            $x2 = explode(",",$x2y2)[0];
            $y2 = explode(",",$x2y2)[1];

             //echo $x3y3 . '</br>';
            $x3 = explode(",",$x3y3)[0];
            $y3 = explode(",",$x3y3)[1];

            $remoteURL = "http://83.212.124.59/map/setCoords.php?";
            $remoteURL = $remoteURL . "&x1=" . $x1;
            $remoteURL = $remoteURL . "&x2=" . $x2;
            $remoteURL = $remoteURL . "&x3=" . $x3;
            $remoteURL = $remoteURL . "&y1=" . $y1;
            $remoteURL = $remoteURL . "&y2=" . $y2;
            $remoteURL = $remoteURL . "&y3=" . $y3;

    /*if (!empty($x1y1)) {
        if (file_get_contents($remoteURL)) {
            echo '<iframe style="width: 100%;" src="' . $remoteURL . '" height="500" frameborder="0" scrolling="no"></iframe>';
        }
      } */

      if ($appId%2==0) {
        echo '<iframe style="width: 100%;" src="maps/map1.html" height="500" frameborder="0" scrolling="no"></iframe>';
      } else {
        echo '<iframe style="width: 100%;" src="maps/map2.html" height="500" frameborder="0" scrolling="no"></iframe>';
      }

    } 



  }

  ?>


</div>  

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
