<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	/*Select data Surat*/
	$sql1 = "SELECT * FROM surat_tugas WHERE id_sk='$id'";
	$query1 = mysql_query($sql1);
	$data1 = mysql_fetch_assoc($query1);

	$nomor_surat = $data1['id_sk'];
	$kepala_st = $data1['kepala_st'];
	$tujuan_st =$data1['tujuan_st'];
	$tempat_st =$data1['tempat_st'];
	$kegiatan =$data1['kegiatan'];
	$tgl_berangkat = $data1['tgl_berangkat'];
	$tgl_kembali = $data1['tgl_kembali'];
	$jumlah_hari = $data1['jumlah_hari'];
	$kendaraan = $data1['kendaraan'];
	$tgl_st = $data1['tgl_st'];
	$penandatangan = $data1['penandatangan'];

	$sql7 = "SELECT * FROM surat_tugas a INNER JOIN pegawai b ON a.penandatangan=b.nip WHERE id_sk='$id'";
	$query7 = mysql_query($sql7);
	$data7 = mysql_fetch_assoc($query7);

	$nama = $data7['nama'];
	$nip = $data7['nip'];
	$pangkat = $data7['pangkat'];
	$jabatan = $data7['jabatan'];
	$level = $data7['level'];


}
 ?>