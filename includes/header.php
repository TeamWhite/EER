<?php require_once 'functions/config.php';?>
<?php require_once 'functions/User.php';?>

  <div class="top-nav">
        <ul class="top-links">
            <li><a href="index.php">Αρχική</a></li>
            <li><a href="ShowPublicData.php">Διαβουλεύσεις</a></li>
            <li><a href="Register.php">Εγγραφή στο σύστημα</a></li>
            <?php 
            	if (empty($_SESSION['username'])) { 
            		echo '<li><a href="Login.php">Είσοδος στο σύστημα</a></li>';
            	} 
            ?>
            <li><a href="contact.php">Επικοινωνία</a></li>
        </ul>
  </div>
<div style="padding-top: 40px; padding-bottom: 10px;">
<center><img src="img/EERlogo2.png" width="120" width="120"><img src="img/banner_left.jpg" style="margin-top: 25px;"/></center>
</div>