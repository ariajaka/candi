<?php 
	$sql_surtu = "SELECT * FROM ptj_luar_kota ORDER BY id_pl";
	$surtu= mysql_query($sql_surtu)or die("Query failed with error: ".mysql_error());
?>