<?php
class database{

	var $host  = "localhost";
	var $uname = "root";
	var $pass  = "";
	var $db    = "db_psikotes";

	function __construct(){
		$koneksi = mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}
}

?>
