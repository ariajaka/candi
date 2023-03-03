<?php 
	$sql = "SELECT * FROM anggaran ORDER BY id";
	$anggaran= mysql_query($sql)or die("Query failed with error: ".mysql_error());
?>