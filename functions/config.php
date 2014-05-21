<?php
session_start();

/******************************************************
 * Syndesi stin vasi dedomenwn me to mysqli extension *
 ******************************************************/
 
$db = new mysqli('localhost', 'root', '', 'eep');
$db->set_charset("utf8");


?>