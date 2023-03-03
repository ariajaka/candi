<?php 
include('../../../config/config.php');
if (isset($_POST['save'])) {
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];

	/*Cek data pegwai apakah sudah ada di database atau belum*/
	$data = mysql_query("SELECT * FROM pegawai WHERE nama='$nama' and nip='$nip'");
	$fetch = mysql_fetch_assoc($data);
	if ($fetch ['nama'] == $nama or $fetch['nip']== $nip) 
	{
		$error = 'Maaf data sudah ada';
		$msg = base64_encode($error);
		header('location:../../index.php?mod=pegawai&act=add&s=0&msg='.$msg);
	}
	else
	{	$sql="INSERT INTO pegawai SET nama='$nama', nip='$nip', pangkat='$pangkat', jabatan='$jabatan', status=1, level=3";
		$sql2="INSERT INTO user SET username='$nip', password='$nip', status=1";
		
		if ($pegawai = mysql_query($sql) && $user = mysql_query($sql2) or die("Query failed with error: ".mysql_error())) 
		{
			$success ="Sukses membuat Pegawai baru";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=pegawai&act=add&s=1&msg='.$msg);		
		}
		else
		{
			$success ="Terjadi Kesalahan, Mohon ulangi";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=pegawai&act=add&s=2&msg='.$msg);
		}
	}
}
 
?>