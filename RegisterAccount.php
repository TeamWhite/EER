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
<?php

	$datetime = date_create()->format('Y-m-d H:i:s');

	if (!empty($_POST)) {

		$username = $db->real_escape_string($_POST['username']);
		$password1 = $db->real_escape_string($_POST['password1']);
		$password2 = $db->real_escape_string($_POST['password2']);
		$email = $db->real_escape_string($_POST['email']);
		$name = $db->real_escape_string($_POST['name']);
		$surname = $db->real_escape_string($_POST['surname']);
		$idNumber = $db->real_escape_string($_POST['id_number']);
		$telephone = $db->real_escape_string($_POST['telephone']);

		$default_role = 1;

		if ($password2 == $password1) {
			$sql = "INSERT INTO accounts VALUES ('','" . $default_role . "','" . $username .
			"','" . hash('sha256',$password1) . "','" . $email . "','" . $name . "','" .$surname. "','" .$idNumber ."','" . $telephone. "','" . $datetime . "');";

			if ($result = $db->query($sql)) {
				echo '<script>alert("O Λογαριασμός σας δημιουργήθηκε επιτυχώς, παρακαλώ εισέλθετε!");</script>';
				echo '<script>redirect("Login.php",1);</script>';
			} else {
				echo '<script>alert("Κάτι πήγε στραβά!");</script>';
				echo '<script>redirect("Register.php",1);</script>';
			}

		} else {
			echo '<script>alert("Οι δυο κωδικοί πρόσβασης δεν ταιριάζουν!");</script>';
			echo '<script>redirect("Register.php",1);</script>';
		}
	}
?>
</body>
</html>