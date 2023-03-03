<?php 
	$sql_surtu = "SELECT * FROM ptj_dlm_kota ORDER BY id_pk";
	$surtu= mysql_query($sql_surtu)or die("Query failed with error: ".mysql_error());
?>