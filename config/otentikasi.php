<?php
include('config.php');
session_start();
if (isset($_POST['login'])) 
{
	$username = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['password']);
	$cari = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$pass'");
	$data = mysql_fetch_assoc($cari);
	$num_rows = mysql_num_rows($cari);
	if($num_rows == 1){
		if($data['status'] == 1) {
			$_SESSION['id'] = $data['id_user'];
			$_SESSION['username'] = $data['username'];
			echo "<script>window.location='../index.php';</script>";
		}else if ($data['status'] == 2) {
			$_SESSION['admin'] = $data['id_user'];
			$_SESSION['id_nama'] = $data['nama'];
			echo "<script>window.location='../admin/index.php';</script>";
		}
	} else {
		echo "<script>window.location='../login.php';</script>";
	}
	/*if ($data['username'] == $username and $data['password'] == $pass and $data['status'] == 1) 
	{
		$_SESSION['id'] = $data['id_user'];
		$_SESSION['id_nama'] = $data['nama'];
		$_SESSION['username'] = $data['username'];
		$eror = base64_encode('SUCCESS');
		$info = base64_encode('Login Berhasil');
		header('location:../index.php');
	}
	else if ($data['username'] == $username and $data['password'] == $pass and $data['status'] == 2) 
	{
		$_SESSION['admin'] = $data['id_user'];
		$_SESSION['id_nama'] = $data['nama'];
		$_SESSION['username'] = $data['username'];
		$eror2 = base64_encode('SUCCESS2');
		$info2 = base64_encode('Login Berhasil');
		header('location:../admin/index.php?msg2='.$eror2.'&info2='.$info2.'');
	}
	else 
	{
		$eror = base64_encode('ERROR');
		$info = base64_encode("Maaf, username dan password yang anda masukkan salah/tidak terdaftar");
		header('location:../login.php?msg='.$eror.'&info='.$info.'');
	}*/
}
else
{
	//header('location:../../daftar.php');
}
?>