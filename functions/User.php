<?php

require_once 'config.php';

class User {

	private $id,$username,$password,$role,$email,$name,$surname,$id_number,$telephone,$creation_date;

	public function __construct() {
	}

	public function tryLogin($username,$password) {
		global $db;

		/* Sanitize user input */
		$password = $db->real_escape_string($password);

		$password = hash('sha256', $password);
		$sql = "SELECT * FROM accounts WHERE `username`='$username' AND `password`='$password'";

		if(!$result = $db->query($sql)){
			echo '<p class="error">Κάτι πήγε στραβά, παρακαλώ επικοινωνήστε με τους διαχειριστές της πλατφόρμας!</p>';
			return;
		}

		if ($result->num_rows == 0) {
			echo '<p class="error">Λανθασμένα στοιχεία εισόδου, παρακαλώ προσπαθήστε ξανά!</p>';
			return;
		} else {
			return 1;
		}

	}


	/* Orizei ton energo xrhsth kathws kai eisagei ola ta stoixeia tou stin yparxousa klassi */

	public function setUser($username) {

		global $db;

		$sql = "SELECT * FROM accounts WHERE `username`='$username'";

		if(!$result = $db->query($sql)){
			echo '<p class="error">Κάτι πήγε στραβά, παρακαλώ επικοινωνήστε με τους διαχειριστές της πλατφόρμας!</p>';
			return;
		} else {

			while($row = $result->fetch_assoc()){
				$this->id = $row['id'];
				$this->username = $row['username'];
				$this->role = $row['role_id'];
				$this->email = $row['email'];
				$this->name = $row['name'];
				$this->surname = $row['surname'];
				$this->id_number = $row['id_number'];
				$this->telephone = $row['telephone'];
				$this->creation_date = $row['creation_date'];
			}

		}

	}

	public function getUsername() {
		return $this->username;
	}

	public function getRoleId() {
		return $this->role_id;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getName() {
		return $this->name;
	}

	public function getSurname() {
		return $this->surname;
	}

	public function getIdNumber() {
		return $this->id_number;
	}

	public function getTelephone() {
		return $this->telephone;
	}

	public function getCreationDate() {
		return $this->creation_date;
	}

	public function getAccountId() {
		return $this->id;
	}

	public function getUserMenu() {
		echo '<div class="user-bar"><a href="NewApplication.php"><strong>Νέα Αίτηση</strong></a> |
    <a href="UserData.php">Ο Λογαριασμός μου</a> | <a href="MyApplications.php">Οι αιτήσεις μου</a> | <a href="Logout.php">Έξοδος</a></div>';
	}


}





?>