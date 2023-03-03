<?php 
include('../../config/config.php');

if (isset($_POST['save'])) {
    $id = $_POST['id'];   
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $pangkat = $_POST['pangkat'];
    $jabatan = $_POST['jabatan'];

    $statement = "UPDATE pegawai SET nama='$nama',nip='$nip', pangkat='$pangkat', jabatan = '$jabatan' WHERE id_pegawai = '$id' ";
    if ($update = mysql_query($statement)) {
        $success ="Berhasil merubah data";
        $msg = base64_encode($success);
        header('location:../../index.php?mod=pegawai&s=1&msg='.$msg);
    }else{
        $success ="Tidak dapat merubah data";
        $msg = base64_encode($success);
        header('location:../../index.php?mod=pegawai&s=0&msg='.$msg);
    }
}
?>