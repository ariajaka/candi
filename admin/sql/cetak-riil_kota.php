<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql_surtu = "SELECT * FROM ptj_dlm_kota a INNER JOIN  ptj_kota b ON a.id_pk=b.id_pk WHERE a.id_pk='$id'";
	$surtu= mysql_query($sql_surtu)or die("Query failed with error: ".mysql_error());
	$data1 = mysql_fetch_assoc($surtu);

	$id_pk = $data1['id_pk'];
	$tarif = number_format($data1['tarif'],0,",",".");
	$tarif2 = $data1['tarif'];


	$sql2 = "SELECT * FROM ptj_dlm_kota a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk WHERE a.id_pk='$id'";
	$query2= mysql_query($sql2)or die("Query failed with error: ".mysql_error());
	$data2 = mysql_fetch_assoc($query2);

	$kegiatan = $data2['kegiatan'];
	$selama = $data2['jumlah_hari'];
	$tgl_berangkat = $data2['tgl_berangkat'];
	$tgl_kembali = $data2['tgl_kembali'];
	$tempat_st = $data2['tempat_st'];
	$tujuan_st = $data2['tujuan_st'];

	$sql3 = "SELECT * FROM ptj_dlm_kota a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk INNER JOIN detail_st_anggaran c ON b.id_sk=c.id_sk WHERE a.id_pk='$id' AND c.anggaran='DIPA Balai POM di Jambi'";
	$query3= mysql_query($sql3)or die("Query failed with error: ".mysql_error());
	$data3 = mysql_fetch_assoc($query3);

	$mak = $data3['mak'];

	$sql3 = "SELECT * FROM ptj_dlm_kota a INNER JOIN pegawai b ON a.nip_ppk=b.nip WHERE a.id_pk='$id'";
	$query3= mysql_query($sql3)or die("Query failed with error: ".mysql_error());
	$data3 = mysql_fetch_assoc($query3);

	$nama_ppk = $data3['nama'];
	$nip_ppk = $data3['nip_ppk'];

	$sql4 = "SELECT * FROM ptj_dlm_kota a INNER JOIN pegawai b ON a.nip_pj=b.nip WHERE a.id_pk='$id'";
	$query4= mysql_query($sql4)or die("Query failed with error: ".mysql_error());
	$data4 = mysql_fetch_assoc($query4);

	$nama_pj = $data4['nama'];
	$nip_pj = $data4['nip_pj'];
	
	$sql5 = "SELECT * from pegawai where jabatan='Bendahara Pengeluaran'";
    $query5 = mysql_query($sql5);
    $data5 = mysql_fetch_array($query5);
    $nama_bendahara = $data5['nama'];
    $nip_bendahara = $data5['nip'];
}
 ?>