<?php 
	$sql = "SELECT * FROM anggaran ORDER BY id";
	$realisasi= mysql_query($sql)or die("Query failed with error: ".mysql_error());
?>