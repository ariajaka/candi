<?php 
include('../../../config/config.php');

$delete = mysql_query("DELETE FROM anggaran");
if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses mengosongkan anggaran");
	header('location:../../index.php?mod=anggaran&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus pegawai");
	header('location:../../index.php?mod=anggaran&s=0&msg='.$msg);
}
?>