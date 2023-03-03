<?php 
include('../../../config/config.php');
$id = $_GET['id'];
$id_pk = $_GET['id_pk'];

echo $id;
echo $id_pk;

$delete = mysql_query("DELETE FROM ptj_dlm_kota WHERE id_pk = '$id'");
$delete2 = mysql_query("DELETE FROM ptj_kota WHERE id_pk = '$id_pk'");


if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses menghapus Pertanggungjawaban dalam Kota");
	header('location:../../index.php?mod=ptj_kota&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus Pertanggungjawaban dalam Kota");
	header('location:../../index.php?mod=ptj_kota&s=0&msg='.$msg);
}
?>