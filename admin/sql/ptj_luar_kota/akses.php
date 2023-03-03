<?php 
include('../../../config/config.php');
$id = $_GET['id'];
$id_pl = $_GET['id_pl'];

echo $id;
echo $id_pl;

$akses = mysql_query("UPDATE ptj_luar_kota SET status_ptj_luar_kota=2 WHERE id_pl = '$id'");

if($akses){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses memberi akses edit pada Pertanggungjawaban Luar Kota");
	header('location:../../index.php?mod=ptj_luar_kota&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus Pertanggungjawaban Luar Kota");
	header('location:../../index.php?mod=ptj_luar_kota&s=0&msg='.$msg);
}
?>