<?php
include '../../core/connection.php';
include '../../core/class.php';
$db   = new database();
$user = new user();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$user->input($_POST['username'],md5($_POST['password']),$_POST['level']);
 	header("location:../index.php?menu=user/data_user");
 }elseif($aksi == "hapus"){
 	$user->delete($_GET['id']);
	header("location:../index.php?menu=user/data_user");
 }elseif($aksi == "update"){
 	$user->update($_POST['id'],$_POST['username'],$_POST['level']);
 	header("location:../index.php?menu=user/data_user");
 }
?>
