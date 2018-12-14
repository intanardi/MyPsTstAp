<?php
include '../../core/connection.php';
include '../../core/class.php';
$db   = new database();
$judul = new judul();

$waktu1 = $_POST['waktu1'];
$waktu2 = $_POST['waktu2'];
$waktu3 = $_POST['waktu3'];
$batas_waktu = $waktu1.":".$waktu2.":".$waktu3;

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$judul->input($_POST['judul'],$batas_waktu);
 	header("location:../index.php?menu=judul/data_judul");
 }elseif($aksi == "hapus"){
 	$judul->delete($_GET['id']);
	header("location:../index.php?menu=judul/data_judul");
 }elseif($aksi == "update"){
 	$judul->update($_POST['id'],$_POST['judul'],$batas_waktu);
 	header("location:../index.php?menu=judul/data_judul");
 }
?>
