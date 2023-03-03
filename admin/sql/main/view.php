<?php 
/*cek data user*/
$pegawai = "SELECT count(*) FROM pegawai";
$pegawai_sql = mysql_query($pegawai);
$data_pegawai = mysql_fetch_array($pegawai_sql);
$jml_pegawai = $data_pegawai[0];
/*cek data user*/
 ?>

 <?php 
/*cek data user*/
$user = "SELECT count(*) FROM user";
$user_sql = mysql_query($user);
$data_user = mysql_fetch_array($user_sql);
$jml_user = $data_user[0];
/*cek data user*/
 ?>

 <?php 
/*cek data user*/
$surat_tugas = "SELECT count(*) FROM surat_tugas";
$surat_tugas_sql = mysql_query($surat_tugas);
$data_surat_tugas = mysql_fetch_array($surat_tugas_sql);
$jml_surat_tugas = $data_surat_tugas[0];
/*cek data user*/
?>

 <?php 
/*cek data user*/
$sppd = "SELECT count(*) FROM detail_st_sppd";
$sppd_sql = mysql_query($sppd);
$data_sppd = mysql_fetch_array($sppd_sql);
$jml_sppd = $data_sppd[0];
/*cek data user*/
 ?>