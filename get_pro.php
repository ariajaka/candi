<?php
	
	$con = mysqli_connect('localhost','root','tmTeEsxiLrj6nxtY','surat_tugas');
 
	$gt = $_GET['term'];
 
	$sql = mysqli_query($con, "SELECT * FROM anggaran WHERE kegiatan LIKE '%".$gt."%' OR mak LIKE '%".$gt."%' ");
 
	$json = array();
	while ($pro = mysqli_fetch_array($sql)) {
		$json[] = array(
 
						'label' 	=> $pro['mak'].' - '.$pro['kegiatan'],
						'value'		=> $pro['mak']
						);
 
	}
	header("Content-Type: text/json");
	echo json_encode($json);
?>