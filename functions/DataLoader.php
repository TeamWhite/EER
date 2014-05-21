<?php
require_once 'config.php';


function getApa() {

	global $db;

	$sql = "SELECT * FROM apa";


	if($result = $db->query($sql)){

		while($row = $result->fetch_assoc()){
			echo "<option value='" . $row['id'] . "'>" . $row['apa_name'] ."</option>";
		}

	}

}

function getDocumentCategories() {
	global $db;

	$sql = "SELECT * FROM categories";


	if($result = $db->query($sql)){

		while($row = $result->fetch_assoc()){
			echo "<option value='" . $row['id'] . "'>" . $row['category_name'] ."</option>";
		}

	}
}

function getTypes() {
	global $db;

	$sql = "SELECT * FROM types";


	if($result = $db->query($sql)){

		while($row = $result->fetch_assoc()){
			echo "<option value='" . $row['id'] . "'>" . $row['type'] ."</option>";
		}

	}
}

function getPerifereies() {
	global $db;

	$sql = "SELECT * FROM perifereies";


	if($result = $db->query($sql)){

		while($row = $result->fetch_assoc()){
			echo "<option value='" . $row['id'] . "'>" . $row['perifereia_onoma'] ."</option>";
		}

	}
}

function getPerifereiakesEnotites() {
	global $db;

	$sql = "SELECT * FROM perifereiakes_enotites";


	if($result = $db->query($sql)){

		while($row = $result->fetch_assoc()){
			echo "<option value='" . $row['id'] . "'>" . $row['enotita_name'] ."</option>";
		}

	}
}


?>