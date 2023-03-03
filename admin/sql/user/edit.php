<?php 
include('../../config/config.php');

if (isset($_POST['save'])) {
    $id = $_POST['id'];   
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
	$plh_kabalai = $_POST['plh_kabalai'];

    $statement = "UPDATE user SET nama='$nama',username='$username', password='$password', status='$plh_kabalai' WHERE id_user = '$id' ";
    if ($update = mysql_query($statement)) {
        $success ="Berhasil merubah data";
        $msg = base64_encode($success);
        header('location:../../index.php?mod=user&s=1&msg='.$msg);
    }else{
        $success ="Tidak dapat merubah data";
        $msg = base64_encode($success);
        header('location:../../index.php?mod=user&s=0&msg='.$msg);
    }
}
?>