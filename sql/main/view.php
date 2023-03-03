<?php 
/*cek data user*/
$user_login = $_SESSION['username'];
$pegawai = "SELECT count(*) FROM ptj_dlm_kota a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk WHERE b.pembuat = '$user_login'";
$pegawai_sql = mysql_query($pegawai);
$data_pegawai = mysql_fetch_array($pegawai_sql);
$jml_pegawai = $data_pegawai[0];
/*cek data user*/
 ?>

 <?php 
/*cek data user*/
$user_login = $_SESSION['username'];
$user = "SELECT count(*) FROM ptj_luar_kota a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk WHERE b.pembuat = '$user_login'";
$user_sql = mysql_query($user);
$data_user = mysql_fetch_array($user_sql);
$jml_user = $data_user[0];
/*cek data user*/
 ?>

 <?php 
/*cek data user*/
$user_login = $_SESSION['username'];
$surat_tugas = "SELECT count(*) FROM surat_tugas WHERE pembuat = '$user_login'";
$surat_tugas_sql = mysql_query($surat_tugas);
$data_surat_tugas = mysql_fetch_array($surat_tugas_sql);
$jml_surat_tugas = $data_surat_tugas[0];
/*cek data user*/
?>

 <?php 
/*cek data user*/
$user_login = $_SESSION['username'];
$sppd = "SELECT count(*) FROM detail_st_sppd a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk INNER JOIN pegawai c ON a.petugas_nip_sppd=c.nip WHERE b.pembuat='$user_login'";
$sppd_sql = mysql_query($sppd);
$data_sppd = mysql_fetch_array($sppd_sql);
$jml_sppd = $data_sppd[0];
/*cek data user*/
 ?>