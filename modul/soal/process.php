<?php
include '../../core/connection.php';
include '../../core/class.php';
$db   = new database();
$soal = new soal();

$aksi = $_GET['aksi'];
 if($aksi == "tambah_gambar"){
   $soal->soal     =$_POST['soal'];
   $soal->image1   =str_replace("'","''", $_POST['pilihan1']);
   $soal->image2   =str_replace("'","''", $_POST['pilihan2']);
   $soal->image3   =str_replace("'","''", $_POST['pilihan3']);
   $soal->image4   =str_replace("'","''", $_POST['pilihan4']);
   $soal->image5   =str_replace("'","''", $_POST['pilihan5']);
   $soal->image6   =str_replace("'","''", $_POST['pilihan6']);
   $soal->id_judul =str_replace("'","''", $_POST['id_judul']);
 	 $soal->input();
 	header("location:../index.php?menu=soal/data_soal");
 }
 if($aksi == "tambah_text"){
   $soal->input_text($_POST['soal'],$_POST['pilihan1'],$_POST['pilihan2'],$_POST['pilihan3'],$_POST['pilihan4'],$_POST['pilihan5'],$_POST['pilihan6'],$_POST['id_judul'],$_POST['jawaban']);
  header("location:../index.php?menu=soal/data_soal");
 }

 elseif($aksi == "hapus"){
 	$soal->delete($_GET['id']);
	header("location:../index.php?menu=soal/data_soal");
}elseif($aksi == "update_text"){
 	$soal->update_text($_POST['id'],$_POST['soal'],$_POST['pilihan1'],$_POST['pilihan2'],$_POST['pilihan3'],$_POST['pilihan4'],$_POST['pilihan5'],$_POST['pilihan6'],$_POST['id_judul'],$_POST['jawaban']);
 	header("location:../index.php?menu=soal/data_soal");
 }
 elseif($aksi == "update_gambar"){
    $soal->soal     =$_POST['soal'];
    $soal->image1   =str_replace("'","''", $_POST['edit_upload_1']);
    $soal->image2   =str_replace("'","''", $_POST['edit_upload_2']);
    $soal->image3   =str_replace("'","''", $_POST['edit_upload_3']);
    $soal->image4   =str_replace("'","''", $_POST['edit_upload_4']);
    $soal->image5   =str_replace("'","''", $_POST['edit_upload_5']);
    $soal->image6   =str_replace("'","''", $_POST['edit_upload_6']);
    $soal->id_judul =str_replace("'","''", $_POST['id_judul']);
    $soal->update_gambar($_POST['id'],$_POST['soal'],$_POST['pilihan1'],$_POST['pilihan2'],$_POST['pilihan3'],$_POST['pilihan4'],$_POST['pilihan5'],$_POST['pilihan6'],$_POST['id_judul'],$_POST['jawaban']);
  	header("location:../index.php?menu=soal/data_soal");
  }
?>
