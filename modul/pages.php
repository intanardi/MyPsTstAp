<?php
$menu=htmlentities($_GET['menu']);
$halaman="$menu.php";
if(!file_exists($halaman) || empty($menu)){
	include "home.php";
}else{
	include "$halaman";
}
?>