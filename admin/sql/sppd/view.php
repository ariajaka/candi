<?php 
	$sql = "SELECT * FROM detail_st_sppd a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk INNER JOIN pegawai c ON a.petugas_nip_sppd=c.nip ORDER BY a.no_sppd";
	$sppd= mysql_query($sql)or die("Query failed with error: ".mysql_error());
?>