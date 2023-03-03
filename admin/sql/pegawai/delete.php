<?php 
include('../../../config/config.php');
$id_pegawai = $_GET['id'];
$nip = $_GET['nip'];

echo $id_pegawai;

$delete = mysql_query("DELETE FROM pegawai where id_pegawai = '$id_pegawai'");
$delete2 = mysql_query("DELETE FROM user where username = '$nip'");
if($delete){
	$info = base64_encode("SUKSES");
	$msg = base64_encode("Sukses menghapus pegawai");
	header('location:../../index.php?mod=pegawai&s=1&msg='.$msg);
}else{
	$info = base64_encode("GAGAL");
	$msg = base64_encode("Terjadi kesalahan gagal menghapus pegawai");
	header('location:../../index.php?mod=pegawai&s=0&msg='.$msg);
}
?>