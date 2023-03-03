<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$petugas_nip_sppd = $_GET['petugas_nip_sppd'];
	$id_sk = $_GET['id_sk'];

	/*Select data Surat*/
	$sql1 = "SELECT * FROM surat_tugas, pegawai, detail_st_sppd WHERE `surat_tugas`.`id_sk`='$id_sk' AND `detail_st_sppd`.`no_sppd` = '$id' AND `pegawai`.`nip` = '$petugas_nip_sppd' ";
	$query1 = mysql_query($sql1);
	$data1 = mysql_fetch_assoc($query1);

	$kepala_st = $data1['kepala_st'];
	$id_sk = $data1['id_sk'];
	$no_sppd = $data1['no_sppd'];
	$no_sppd = $data1['no_sppd'];
	$tingkat_perjadin = $data1['tingkat_perjadin'];
	$kendaraan = $data1['kendaraan'];
	$kegiatan = $data1['kegiatan'];
	$tujuan_st = $data1['tujuan_st'];
	$jumlah_hari = $data1['jumlah_hari'];
	$tgl_pergi = $data1['tgl_berangkat'];
	$tgl_pulang = $data1['tgl_kembali'];
	$tanggal_surat = $data1['tgl_st'];
	

	/*penanda tangan SPPD*/
	$sql2 = "SELECT * FROM detail_st_sppd, pegawai WHERE `detail_st_sppd`.`penandatangan_sppd` = `pegawai`.`nip` AND `detail_st_sppd`.`no_sppd` ='$id'";
	$query2 = mysql_query($sql2);
	$data2 = mysql_fetch_assoc($query2);
	
	$penandatangan = $data2['nama'];
	$penandatangan_nip = $data2['nip'];

	/*peetugas SPPD*/
	$sql3 = "SELECT * FROM pegawai WHERE nip = '$petugas_nip_sppd'";
	$query3 = mysql_query($sql3);
	$data3 = mysql_fetch_assoc($query3);

	$petugas = $data3['nama'];
	$pangkat = $data3['pangkat'];
	$jabatan = $data3['jabatan'];

	/*Anggaran SPPD*/
	$sql4 = "SELECT * FROM detail_st_anggaran a INNER JOIN surat_tugas b ON b.id_sk=a.id_sk WHERE a.id_sk='$id_sk'";
    $query4 = mysql_query($sql4);
	$data4 = mysql_fetch_assoc($query4);

	$anggaran = $data4['anggaran'];
	$mak = $data4['mak'];

}
 ?>