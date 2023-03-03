<?php 
	$user_login = $_SESSION['username'];
	$sql_surtu = "SELECT * FROM ptj_dlm_kota a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk WHERE b.pembuat = '$user_login' ORDER BY a.id_pk";
	$surtu= mysql_query($sql_surtu)or die("Query failed with error: ".mysql_error());
?>