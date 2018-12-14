<?php
include '../core/connection.php';
include '../core/class.php';
$db   = new database();
$user = new user();

 	$user->login($_POST['username'],md5($_POST['password']));

?>