<?php 
include('../../config/config.php');
$id = $_GET['id'];
$id_sk = $_GET['id_sk'];

echo $id;
echo $id_sk;

$update = mysql_query("UPDATE surat_tugas set status = 'belum_sppd' WHERE id_sk = '$id_sk'");
$delete = mysql_query("DELETE FROM detail_st_sppd WHERE no_sppd = '$id'");
$delete = mysql_query("DELETE FROM ptj_luar_kota WHERE no_sppd = '$id'");


if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses menghapus SPPD");
	header('location:../../index.php?mod=sppd&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus SPPD");
	header('location:../../index.php?mod=sppd&s=0&msg='.$msg);
}
?>