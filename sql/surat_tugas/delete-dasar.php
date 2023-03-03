<?php 
include('../../config/config.php');
if(isset($_GET['id'])){
	$idcall= $_GET['id'];
	// Hapus data sesuai Kode yang didapat di URL
		
	$sql="DELETE FROM detail_st_dasar where id_sk='$idcall' LIMIT 1";
	$query=mysql_query($sql);
		
	if($query){
	// Refresh halaman
		header('location:../../index.php?mod=surat_tugas&act=edit&id='.$idcall);
		// echo "<meta http-equiv='refresh' content='0; url=index.php?mod=surattugas&act=edit&id=$idcall'>" ;
		}
	}else{
	// Jika tidak ada data Kode ditemukan di URL
	echo "<b>Data yang dihapus tidak ada</b>";
	}
 ?>