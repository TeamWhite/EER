<?php
require_once 'functions/config.php';
require_once 'functions/User.php';
?>
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

<?php

if (!empty($_POST)) {

	$error = false;

	foreach ($_POST as $key => $value) {
		if (mb_strlen($value) > 1000) {
			$error = true;
			break;
		}
	}

	if ($error) {
		echo '<script>alert("Παρακαλώ συμπληρώστε ξανά με νέες τιμές!");</script>';
		exit;
	}

	$user = new User();
	$username = $_SESSION['username'];
	$user->setUser($username);

	$apa = $db->real_escape_string($_POST['apa']);
	$yphresia_imerominia = "";
	$xrhsths_tax_dieuthinsi = $db->real_escape_string($_POST['xrhsths_tax_dieuthinsi']);
	$yphresia_ar_protok = "";
	$xrhsths_tilefwno = $db->real_escape_string($_POST['xrhsths_tilefwno']);
	$yphresia_perivantollogiki_tautotita = "";
	$xrhsths_fax = $db->real_escape_string($_POST['xrhsths_fax']);
	$xrhsths_email = $db->real_escape_string($_POST['xrhsths_email']);
	$xrhsths_titlos_ergou = $db->real_escape_string($_POST['xrhsths_titlos_ergou']);
	$foreas_epwnumia = $db->real_escape_string($_POST['foreas_epwnumia']);
	$foreas_dieuthinsi = $db->real_escape_string($_POST['foreas_dieuthinsi']);
	$foreas_perioxi = $db->real_escape_string($_POST['foreas_perioxi']);
	$foreas_tilefwno = $db->real_escape_string($_POST['foreas_tilefwno']);
	$foreas_fax = $db->real_escape_string($_POST['foreas_fax']);
	$foreas_email = $db->real_escape_string($_POST['foreas_email']);
	$foreas_ypeuthinos_epikoinwnias = $db->real_escape_string($_POST['foreas_ypeuthinos_epikoinwnias']);
	$foreas_ypeuthinos_tilefwno = $db->real_escape_string($_POST['foreas_ypeuthinos_tilefwno']);
	$foreas_ypeuthinos_email = $db->real_escape_string($_POST['foreas_ypeuthinos_email']);
	$foreas_ypeuthinos_thesi = $db->real_escape_string($_POST['foreas_ypeuthinos_thesi']);
	$foreas_ypeuthinos_tilefwno = $db->real_escape_string($_POST['foreas_ypeuthinos_tilefwno']);
	$meletitis_epwnumia = $db->real_escape_string($_POST['meletitis_epwnumia']);
	$meletitis_dieuthinsi = $db->real_escape_string($_POST['meletitis_dieuthinsi']);
	$meletitis_perioxi = $db->real_escape_string($_POST['meletitis_perioxi']);
	$meletitis_tilefwno = $db->real_escape_string($_POST['meletitis_tilefwno']);
	$meletitis_fax = $db->real_escape_string($_POST['meletitis_fax']);
	$meletitis_email = $db->real_escape_string($_POST['meletitis_email']);
	$meletitis_ypeuthinos_epikoinwnias = $db->real_escape_string($_POST['meletitis_ypeuthinos_epikoinwnias']);
	$meletitis_ypeuthinos_tilefwno = $db->real_escape_string($_POST['meletitis_ypeuthinos_tilefwno']);
	$meletitis_ypeuthinos_email = $db->real_escape_string($_POST['meletitis_ypeuthinos_email']);
	$meletitis_ypeuthinos_thesi = $db->real_escape_string($_POST['meletitis_ypeuthinos_thesi']);
	$category_id = $db->real_escape_string($_POST['category_id']);
	$type_id = $db->real_escape_string($_POST['type_id']);
	$aa = $db->real_escape_string($_POST['aa']);
	$egsa87_1 = $db->real_escape_string($_POST['egsa87_1']);
	$egsa87_2 = $db->real_escape_string($_POST['egsa87_2']);
	$egsa87_3 = $db->real_escape_string($_POST['egsa87_3']);
	$wgs84_1 = $db->real_escape_string($_POST['wgs84_1']);
	$wgs84_2 = $db->real_escape_string($_POST['wgs84_2']);
	$wgs84_3 = $db->real_escape_string($_POST['wgs84_3']);
	$perifereia_id = $db->real_escape_string($_POST['perifereia_id']);
	$perifereiaki_enotita_id = $db->real_escape_string($_POST['perifereiaki_enotita_id']);
	$dimos = $db->real_escape_string($_POST['dimos']);

	$datetime = date_create()->format('Y-m-d H:i:s');

	$id = $user->getAccountId();
	$appId = "";

	/* Eisagwgh aithshs stis aithseis */

	$sql = "INSERT INTO applications VALUES ('','$id','$datetime','');";

	if ($result = $db->query($sql)) {

		$sql = "SELECT id FROM applications WHERE `submission_date`='" . $datetime . "' AND `account_id`='" .$id. "'";

		if ($result2 = $db->query($sql)) {

			while($row = $result2->fetch_assoc()){
				$appId = $row['id'];
			}

		}

		$sql = "INSERT INTO form_t VALUES ('','" .$appId. "','" .$apa.
		"', '" . $yphresia_imerominia . "', '" . $yphresia_ar_protok. "', '
		" . $yphresia_perivantollogiki_tautotita . "', '" . $xrhsths_tax_dieuthinsi . "','
		" .$xrhsths_tilefwno. "','" . $xrhsths_fax . "', '" . $xrhsths_email ."','" .$xrhsths_titlos_ergou . "','"
		. $foreas_epwnumia. "','" . $foreas_dieuthinsi. "','" . $foreas_perioxi ."','" . $foreas_tilefwno ."','" .
		$foreas_fax . "','" . $foreas_email . "','" . $foreas_ypeuthinos_epikoinwnias . "','" . $foreas_ypeuthinos_tilefwno . "','" .
		$foreas_ypeuthinos_email . "','" . $foreas_ypeuthinos_thesi . "','" . $meletitis_epwnumia . "','" . $meletitis_dieuthinsi . "','" .
		$meletitis_perioxi . "','" . $meletitis_tilefwno . "','" . $meletitis_fax . "','" . $meletitis_email . "','" . $meletitis_ypeuthinos_epikoinwnias . "','" .
		$meletitis_ypeuthinos_tilefwno . "','" . $meletitis_ypeuthinos_email . "','" . $meletitis_ypeuthinos_thesi . "','" .
		$category_id. "','" . $type_id . "','" . $aa . "','" . $egsa87_1 . "','" . $egsa87_2 . "','" .$egsa87_3. "','" .
		$wgs84_1. "','" . $wgs84_2 ."','" . $wgs84_3 . "','" . $perifereia_id . "','" . $perifereiaki_enotita_id . "','" . $dimos . "')";

		$result3 = $db->query($sql);

		if ($result3) {
			echo '<script>alert("Η αίτηση σας καταχωρήθηκε επιτυχώς!");</script>';
			echo '<script>redirect("UserPanel.php",1);</script>';
		}

	}


}

?>
</body>
</html>