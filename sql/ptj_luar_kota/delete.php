<?php 
include('../../config/config.php');
$id = $_GET['id'];
$id_pl = $_GET['id_pl'];

echo $id;
echo $id_pl;

$delete = mysql_query("DELETE FROM detail_ptj_luar WHERE id_pl = '$id'");
$delete = mysql_query("DELETE FROM ptj_luar_kota WHERE no_sppd = '$id_pl'");


if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses menghapus Pertanggungjawaban Luar Kota");
	header('location:../../index.php?mod=ptj_luar_kota&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus Pertanggungjawaban Luar Kota");
	header('location:../../index.php?mod=ptj_luar_kota&s=0&msg='.$msg);
}
?>