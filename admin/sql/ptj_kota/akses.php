<?php 
include('../../../config/config.php');
$id = $_GET['id'];
$id_pk = $_GET['id_pk'];

echo $id;
echo $id_pk;

$akses = mysql_query("UPDATE ptj_dlm_kota SET status_ptj_kota=2 WHERE id_pk = '$id'");

if($akses){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses memberi akses edit pada Pertanggungjawaban dalam Kota");
	header('location:../../index.php?mod=ptj_kota&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus Pertanggungjawaban dalam Kota");
	header('location:../../index.php?mod=ptj_kota&s=0&msg='.$msg);
}
?>