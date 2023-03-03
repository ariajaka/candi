<?php 
	$sql = "SELECT * FROM surat_tugas ORDER BY id_sk";
	$surat_tugas= mysql_query($sql)or die("Query failed with error: ".mysql_error());
?>