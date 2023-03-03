<?php 
include('../../config/config.php');
$id_sk = $_GET['id'];

echo $id_sk;

$delete = mysql_query("DELETE FROM surat_tugas WHERE id_sk = '$id_sk'");
$delete = mysql_query("DELETE FROM detail_st_anggaran WHERE id_sk = '$id_sk'");
$delete = mysql_query("DELETE FROM detail_st WHERE id_sk = '$id_sk'");
$delete = mysql_query("DELETE FROM detail_st_sppd WHERE id_sk = '$id_sk'");
$delete = mysql_query("DELETE FROM ptj_dlm_kota WHERE id_sk = '$id_sk'");
$delete = mysql_query("DELETE FROM ptj_kota WHERE id_sk = '$id_sk'");
$delete = mysql_query("DELETE FROM ptj_luar_kota WHERE id_sk = '$id_sk'");

if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses menghapus Surat Tugas");
	header('location:../../index.php?mod=surat_tugas&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus Surat Tugas");
	header('location:../../index.php?mod=surat_tugas&s=0&msg='.$msg);
}
?>