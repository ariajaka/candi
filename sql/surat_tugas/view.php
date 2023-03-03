<?php 
	$user_login = $_SESSION['username'];
	$sql = "SELECT * FROM surat_tugas WHERE pembuat = '$user_login' ORDER BY id_sk";
	$surat_tugas= mysql_query($sql)or die("Query failed with error: ".mysql_error());
?>